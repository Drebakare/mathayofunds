<?php

namespace App\Http\Controllers\Homepage;

use App\Blog;
use App\CardRate;
use App\Coin;
use App\CoinRate;
use App\Http\Controllers\Controller;
use App\Review;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class HomepageController extends Controller
{
    public function Homepage(){
        $eth_rate = CoinRate::getRate(2);
        $btc_rate = CoinRate::getRate(1);
        $btc_price = 9744.17;
        $eth_price = 250;
        $coins = Coin::getCoins();
        $reviews = Review::get();
        $blogs = Blog::take(3)->orderBy('id', 'desc')->get();
        return view('welcome', compact('eth_rate', 'btc_rate', 'coins', "btc_price", 'eth_price','reviews', 'blogs'));
    }

    public function Faqs(){
        return view('actions.faqs');
    }

    public function aboutUs(){
        return view('actions.about-us');
    }

    public function viewCardRate(){
        $cards = CardRate::get();
        return view('actions.card-rate', compact('cards'));
    }

    public function viewCoinRate(){
        $coins = CoinRate::get();
        return view('actions.coin-rate', compact('coins'));
    }

    public function verifyAccount($token){
        $user = User::where('token', $token)->first();
        if ($user){
            $user->is_verified = 1;
            $user->token = Str::random(15);
            $user->save();
            return redirect(route('homepage'))->with('success', 'Account Successfully Verified');
        }
        else{
            Auth::logout();
            return redirect(route('login'))->with('failure', 'Token has expired');
        }
    }

    public function ensureAccountVerification(){
        return view('actions.verify');
    }

    public function resendVerificationLink($token){
        try {
            $user = User::where('token', $token)->first();
            if ($user){
                Mail::to($user->email)->send(new \App\Mail\VerificationMail($user)); // send email to user
                return redirect()->back()->with('success', 'Verification Link Successfully Sent to Your Email');
            }
            else{
                return redirect()->back()->with('failure', 'User Details Do not Exist');
            }
        }
        catch (\Exception $exception){
            return redirect()->back()->with('failure', 'Action Could not be Performed');

        }
    }
}
