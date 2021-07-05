<?php

use Illuminate\Support\Facades\Route;
use App\Models\Comment;
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

// Route::get('/', function () {
//     $comments = Comment::all();
//     return view('welcome', compact('comments'));
// });

Route::get('/', App\Http\Livewire\Comments::class);

Route::get('/login', App\Http\Livewire\Login::class);

Route::get('/register', App\Http\Livewire\Register::class);

// Route::get('/' , App\Http\Livewire\Comments::class,function () {
//      $comments = Comment::all();
//     return view('welcome', compact('comments'));
//  });
