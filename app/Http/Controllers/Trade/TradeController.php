<?php

namespace App\Http\Controllers\Trade;

use App\AccountDetail;
use App\Card;
use App\CardRate;
use App\CardSelling;
use App\Coin;
use App\CoinBuying;
use App\CoinRate;
use App\CoinSelling;
use App\Country;
use App\Denomination;
use App\Ecode;
use App\EcodeTransactions;
use App\Http\Controllers\Controller;
use App\ImageUpload;
use App\Platform;
use App\User;
use App\Variant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class TradeController extends Controller
{
    public function tradeCoin(){
        $account_details = AccountDetail::where('user_id', Auth::user()->id)->first();
        if ($account_details){
            if (session()->get('intended_url')){
                session()->forget('intended_url');
            }
            $coins = Coin::getCoins();
            $bitcoin = Coin::getBitCoin();
            $ethereum = Coin::getEthereum();
            $bitcoin_platforms = Platform::getCoinPlatforms($bitcoin->id);
            $ethereum_platforms = Platform::getCoinPlatforms($ethereum->id);
            $bitcoin_rate = CoinRate::where(['coin_id' => $bitcoin->id, 'active' => 1])->get();
            $ethereum_rate = CoinRate::where(['coin_id' => $ethereum->id, 'active' => 1])->get();
            $variants = Variant::where('section', 'COIN')->get();

            return view('actions.trade-coin', compact('bitcoin', 'ethereum', 'bitcoin_rate','ethereum_rate',
                'bitcoin_platforms', 'ethereum_platforms', 'coins', 'account_details', $variants));
        }
        else{
            return redirect(route('user.profile'))->with('failure', 'Your account details must be updated to perform this action');
        }

    }

    public function tradeCard(){
        $account_details = AccountDetail::where('user_id', Auth::user()->id)->first();
        if ($account_details){
            if (session()->get('intended_url')){
                session()->forget('intended_url');
            }
            $cards = Card::get();
            $countries = Country::get();
            $denominations = Denomination::get();
            $card_rates = Card::inRandomOrder()->take(2)->get();
            $variants = Variant::where('section', 'CARD')->get();

            /*$coins = Coin::getCoins();
            $bitcoin = Coin::getBitCoin();
            $ethereum = Coin::getEthereum();
            $bitcoin_platforms = Platform::getCoinPlatforms($bitcoin->id);
            $ethereum_platforms = Platform::getCoinPlatforms($ethereum->id);
            $bitcoin_rate = CoinRate::getRate($bitcoin->id);
            $ethereum_rate = CoinRate::getRate($ethereum->id);*/
            return view('actions.trade-card', compact('cards', 'countries', 'denominations', 'card_rates', 'variants'));
        }
        else{
            return redirect(route('user.profile'))->with('failure', 'Your account details must be updated to perform this action');
        }

    }

    public function submitSellCoinForm(Request $request){
//        try {
            if($request->file('payment-proof')->getSize() > 5000000 )
            {
                return redirect()->back()->with('failure', "Uploaded File Size is Larger than 5mb");
            }
            $this->validate($request, [
                'coin_type' => 'bail|required',
                'sell_coin_amount' => 'bail|required',
                'payment_method' => 'bail|required',
                'platform' => 'bail|required',
            ]);

            $rate_amount = 0;
            $rate_id = 0;
            $rates = CoinRate::where(['coin_id' => $request->coin_type, 'active' => 1])->get();
            foreach ($rates as $r){
                if ($r->min <= $request->sell_coin_amount && ($request->sell_coin_amount <= $r->max || $r->max === 9999 ) ){
                    $rate_amount = $r->usd_rate;
                    $rate_id = $r->id;
                    break;
                }
            }
            if ($rate_amount == 0){
                throw new \Exception("No rate found for your request");
            }
            $image = $request->file('payment-proof');
            $image_name = User::processImage($image);
            $sellings = new CoinSelling();
            $sellings->platform_id = $request->platform;
            $sellings->coin_amount = $request->sell_coin_amount;
            $sellings->coin_rate_id = $rate_id;
            $sellings->rate_amount = $rate_amount;
            $sellings->payment_proof = $image_name;
            $sellings->status = 0;
            $sellings->user_id = Auth::user()->id;
            $sellings->token = Str::random(15);
            $sellings->coin_id = $request->coin_type;
            $sellings->payment_type = $request->payment_method ;
            $sellings->amount_payable = $sellings->rate_amount *  $sellings->coin_amount;
            $sellings->save();
            Mail::to('mathayofund@gmail.com')->send(new \App\Mail\TradeMail());
            return redirect()->back()->with('success', "Transaction Submitted For Admin Action");
//        }
//        catch (\Throwable $exception){
//            return redirect()->back()->with('failure', "Transaction Failed to be Processed, Kindly try again");
//        }
    }
    public function submitTradeCardForm(Request $request){
        try {
            foreach ($request->allFiles() as $folders){
                foreach ($folders as $file){
                    if($file->getSize() > 5000000 ) {
                        return redirect()->back()->with('failure', "One of the Uploaded Files Size is Larger than 5mb");
                    }
                }
            }
            $card_amount = Denomination::where('id', $request->denomination)->first()->value;
            $giftcard_type = "giftcard-type";
            $rateR = CardRate::whereRaw("card_id = ? AND country_id = ? AND variant = ? AND min <= ? AND (max = 9999 OR max >= ? ) AND active = 1",
                [$request->$giftcard_type, $request->country, $request->variant, $card_amount, $card_amount])->first();

            $rate = 0;
            if($rateR != null){
                $rate = $rateR->rate;
            }else{
                throw new \Exception("No rate found for your request");
            }

            if ($request->sell_option == 1){
                $new_card = new CardSelling();
                $new_card->card_id = $request->$giftcard_type;
                $new_card->user_id = Auth::user()->id;
                $new_card->sell_option_id = $request->sell_option;
                $new_card->token = Str::random(15);
                $new_card->denomination_id = $request->denomination;
                $new_card->payment_type = $request->payment_method;
                if ($request->country == "others"){
                    $new_card->user_transaction_approval = 0;
                    $new_card->other_country = $request->country_other;
                } else{

                    $new_card->user_transaction_approval = 1;
                    $new_card->amount_payable = $rate * $card_amount;
                    $new_card->country_id = $request->country;
                    $new_card->rate = $rate;
                }
                $new_card->save();
                $new_ecode = new EcodeTransactions();
                $new_ecode->code = $request->ecode;
                $new_ecode->card_selling_id = $new_card->id;
                $new_ecode->token = Str::random(15);
                $new_ecode->save();
                return redirect()->back()->with('success', "Transaction Submitted For Admin Processing");
            }
            else{
                $new_card = new CardSelling();
                $new_card->card_id = $request->$giftcard_type;
                $new_card->denomination_id = $request->denomination;
                $new_card->user_id = Auth::user()->id;
                $new_card->payment_type = $request->payment_method;
                if ($request->$giftcard_type == 3){
                    $new_card->receipt_type = $request->receipt_type == 'cash' ? 1 : 2;
                }
                $new_card->token = Str::random(15);
                $new_card->sell_option_id = $request->sell_option;
                if ($request->country == "others"){
                    $new_card->user_transaction_approval = 0;
                    $new_card->other_country = $request->country_other;
                }
                else{
                    $new_card->amount_payable = $rate * $card_amount * count($request->file('card_upload'));
                    $new_card->rate = $rate;
                    $new_card->country_id = $request->country;
                }
                $new_card->save();
                foreach($request->file('card_upload') as $image){
                   $image_name = User::processImage($image);
                   $new_image = new ImageUpload();
                   $new_image->card_selling_id = $new_card->id;
                   $new_image->image = $image_name;
                   $new_image->image_type = 1;
                   $new_image->token = Str::random(15);
                   $new_image->save();
                }
                foreach($request->file('receipt_upload') as $image){
                   $image_name = User::processImage($image);
                   $new_image = new ImageUpload();
                   $new_image->card_selling_id = $new_card->id;
                   $new_image->image = $image_name;
                   $new_image->image_type = 2;
                   $new_image->token = Str::random(15);
                   $new_image->save();
                }
                Mail::to('mathayofund@gmail.com')->send(new \App\Mail\TradeMail());
                return redirect()->back()->with('success', "Transaction Submitted For Admin Processing");
            }
        }
        catch (\Exception $exception){
            return redirect()->back()->with('failure', "Transaction Failed to be Processed, Kindly try again");
        }
    }
    public function submitBuyCoinForm(Request $request){
        try {
            if($request->file('payment_proof')->getSize() > 5000000 )
            {
                return redirect()->back()->with('failure', "Uploaded File Size is Larger than 5mb");
            }
            $this->validate($request, [
                'coin_type' => 'bail|required',
                'coin_amount' => 'bail|required',
                'wallet_address' => 'bail|required',
                'platform' => 'bail|required',
            ]);
            $image = $request->file('payment_proof');
            $image_name = User::processImage($image);
            $buyings = new CoinBuying();
            $buyings->amount = $request->coin_amount;
            $buyings->buying_rate = CoinRate::getRate($request->coin_type)->usd_rate;
            $buyings->coin_rate_id = CoinRate::getRate($request->coin_type)->id;
            $buyings->coin_id = $request->coin_type;
            $buyings->coin_wallet = $request->wallet_address;
            $buyings->status = 0;
            $buyings->payment_proof = $image_name;
            $buyings->user_id = Auth::user()->id;
            $buyings->token = Str::random(15);
            $buyings->platform_id = $request->platform;
            $buyings->payment_method = $request->payment_method ;
            $buyings->coin_value = $buyings->amount *  $buyings->buying_rate;
            $buyings->save();
            Mail::to('mathayofund@gmail.com')->send(new \App\Mail\TradeMail());
            return redirect()->back()->with('success', "Transaction Submitted For Admin Action");
        }
        catch (\Exception $exception){
            return redirect()->back()->with('failure', "Transaction Failed to be Processed, Kindly try again");
        }
    }
    public function viewRate(Request $request){
        $denomination = Denomination::where('id', $request->denomination)->first();
        $rate = CardRate::whereRaw("card_id = ? AND country_id = ? AND variant = ? AND min <= ? AND (max = 9999 OR max >= ? ) AND active = 1",
            [$request->card_id, $request->country_id, $request->variant, $denomination->value, $denomination->value])->first();

        if ($rate){
            $response = array(
                "rate" => $rate->rate,
                "denomination" => $denomination->value,
                "status" => true,
                "msg" => "Rate Successfully Updated"
            );
            return response()->json($response);
        }
        else{
            $response = array(
                "rate" => 0,
                "status" => false,
                "msg" => "No Rate Found For the Selected Card, Kindly Message Admin For Clarification"
            );
            return response()->json($response);
        }
    }

}
