<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/normal', function () {

    Mail::send([],[],function($msg){
        $msg->to('user@gmail.com','user')
            ->subject('welcome to programming')
            ->from('Hi@gmail.com')
            ->setBody('thanks for register our application!');
    });
    echo 'mail send successful';
});

Route::get('/normal-with-view', function () {
    $data = ['name'=>'shakil hossain', 'msg'=>'this is a normal mail with view.'];

    Mail::send('mail.welcome',$data,function($msg){
        $msg->to('user@gmail.com','user')
            ->subject('programming');
    });
    echo 'mail send successful';
});