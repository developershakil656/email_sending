<?php

use App\Mail\MarkDownMail;
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

#normal
Route::get('/normal', function () {

    Mail::send([],[],function($msg){
        $msg->to('user@gmail.com','user')
            ->subject('welcome to programming')
            ->from('Hi@gmail.com')
            ->setBody('thanks for register our application!');
    });
    echo 'mail send successful';
});

#normal with view
Route::get('/normal-with-view', function () {
    $data = ['name'=>'shakil hossain', 'msg'=>'this is a normal mail with view.'];

    Mail::send('mail.welcome',$data,function($msg){
        $msg->to('user@gmail.com','user')
            ->subject('programming');
    });
    echo 'mail send successful';
});

#advance
Route::get('/main', function () {
    $data = ['name'=>'shakil hossain', 'msg'=>'this is a advance mail message.'];

    Mail::to('user2@gmail.com','shamim')->send(new App\Mail\MainMail($data));
    echo 'main mail send successful';
});

#markdown
Route::get('/markdown', function () {
    $data = ['name'=>'shakil hossain', 'msg'=>'this is a markdown mail message.'];

    Mail::to('user3@gmail.com','shamim hossain')->send(new MarkDownMail($data));
    echo 'main mail send successful';
});