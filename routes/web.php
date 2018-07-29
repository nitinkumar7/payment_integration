<?php

use Illuminate\Http\Request;

use App\Http\Requests;

Route::get('/', 'HomeController@main');
Route::get('/paywithpaypal', 'HomeController@paywithpaypal');

Route::get('/stripe', 'HomeController@stripe');

//payment newt_form()

// route for processing payment
Route::post('paypal', 'PaymentController@payWithpaypal');

// route for check status of the payment
Route::get('status', 'PaymentController@getPaymentStatus');

Route::post('stripe', 'StripeController@postPaymentWithStripe');

Route::get('/email', 'mailController@email');
Route::post('send', 'mailController@send');

