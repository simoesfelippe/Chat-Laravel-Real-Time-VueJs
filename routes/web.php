<?php


$this->group(['middleware' => 'auth'], function() {
	$this->get('chat', 'Chat\ChatController@index')->name('chat');

	$this->post('chat/message', 'Chat\ChatController@store');
	$this->get('chat/messages', 'Chat\ChatController@messages');
	$this->get('meu-perfil', 'User\UserController@profile')->name('profile');
	$this->post('meu-perfil', 'User\UserController@profileUpdate')->name('profile.update');
});


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
