<?php
/*
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/', function() {
	return response()->json(['message'=>'Hola mundo!'], 200);
});*/

//Public routes
Route::get('me', 'User\MeController@getMe');

// Route group for authenticated users only
Route::group(['middleware' => ['auth:api']], function(){
	Route::post('logout', 'Auth\LoginController@logout');

});

// Routes for guests only
Route::group(['middleware' => ['guest:api']], function(){
	Route::post('register', 'Auth\RegisterController@register');
	Route::post('verification/verify/{user}', 'Auth\VerificationController@verify')->name('verification.verify');
 	Route::post('verification/resend', 'Auth\VerificationController@resend');
 	Route::post('login', 'Auth\LoginController@login');
 	Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail');
 	Route::post('password/reset', 'Auth\ResetPasswordController@reset');

});




