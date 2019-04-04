<?php

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

$Icamp18_Routes = function() {

	Route::get('/', 'Icamp18\PageController@showLanding')->name('landing');

	Route::post('login/newReg', 'Icamp18\LoginController@register_player');

	Route::get('emailVerify', 'Icamp18\LoginController@test')->name('emailVerify');

	Route::post('login/userAuth', 'Icamp18\LoginController@authenticate_player');

	Route::get('login', 'Icamp18\PageController@showLogin')->name('login');

	Route::get('dashboard', 'Icamp18\PageController@showProfile')->name('dashboard');

	Route::get('profile', 'Icamp18\PageController@showProfile')->name('profile');

};

$KIITEcell_Routes = function() {
	Route::get('/', 'KIITEcell\PageController@showLanding')->name('landing');
	Route::post('php/newsletter-subscribe.php', 'KIITEcell\MainController@newsletter_reg');
};



Route::group(array('domain' => 'interncamp.ecell.org.in'), $Icamp18_Routes);
Route::group(array('domain' => 'ecell.org.in'), $KIITEcell_Routes);

