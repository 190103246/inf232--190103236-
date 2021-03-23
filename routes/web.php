<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

use App\Models\Post;

use App\Http\Controllers\BlogController;
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


Route::get('post/add', function() {
    DB::table('posts')->insert([
        'title' => 'web',
        'body' => 'Danat'
    ]);
});

Route::get('post', [BlogController::class, 'index']);
Route::get('blog/l/create', function() {
    return view('blog/l.create');
});

Route::post('blog/l/create', [BlogController::class, 'store'])->name('add-client');