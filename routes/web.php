<?php

    use App\Http\Controllers\PostController;
    use Illuminate\Support\Facades\Mail;
    use Illuminate\Support\Facades\Route;

    /*
    |--------------------------------------------------------------------------
    | Web Routes
    |--------------------------------------------------------------------------
    |
    | Here is where you can register web routes for your application. These
    | routes are loaded by the RouteServiceProvider and all of them will
    | be assigned to the "web" middleware group. Make something great!
    |
    */

    Route::get('/' , function () {
        return view('welcome');
    });

    Route::get('/sendemail' , function () {
        Mail::raw('hello world from Laravel here' , function ( $message ) {
            $message->to('admin@gmail.com')->subject('noreplay');
        });
        dd('success');
    });
    Route::resource("data" , PostController::class);
