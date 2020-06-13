<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/cards', function (){
   return view('pages.trade-card');
});
    Route::get('/', [
        'as' => 'homepage',
        'uses' => 'Homepage\HomepageController@Homepage'
    ]);

    Route::get('/logout', [
        'as' => 'logout',
        'uses' => 'Authentication\AuthenticationController@Logout'
    ]);

    Route::post('/newsletter-subscription', [
        'as' => 'newsletter',
        'uses' => 'Newsletter\NewsletterController@newsletterSubscription'
    ]);

    Route::get('/login', [
        'as' => 'login',
        'uses' => 'Authentication\AuthenticationController@Authenticate'
    ]);

    Route::get('/register', [
        'as' => 'register',
        'uses' => 'Authentication\AuthenticationController@Authenticate'
    ]);

    Route::post('/user-login', [
        'as' => 'user.login',
        'uses' => 'Authentication\AuthenticationController@userLogin'
    ]);

    Route::post('/user-registration', [
        'as' => 'user.registration',
        'uses' => 'Authentication\AuthenticationController@userRegistration'
    ]);

    Route::get('/trade-coin', [
        'as' => 'user.trade-coin',
        'uses' => 'Trade\TradeController@tradeCoin'
    ])->middleware('checkAuth');

    Route::post('/submit-sell-coin-form', [
        'as' => 'submit-sell-coin-form',
        'uses' => 'Trade\TradeController@submitSellCoinForm'
    ])->middleware('checkAuth');

    Route::post('/submit-buy-coin-form', [
        'as' => 'submit-buy-coin-form',
        'uses' => 'Trade\TradeController@submitBuyCoinForm'
    ])->middleware('checkAuth');
