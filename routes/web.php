<?php

use App\Http\Controllers\Account\IndexController;
use App\Http\Controllers\Form\OrdersController;
use App\Http\Controllers\Form\ReviewsController;
use App\Http\Controllers\Admin\FeedbackController;
use App\Http\Controllers\Admin\OrdersController as AdminOrdersController;
use App\Http\Controllers\Admin\NewsController as AdminNewsController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ParserController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\SocialController;
use Illuminate\Support\Facades\Auth;
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

/*Route::get('/', function () {
    return view('welcome');
});*/

//account
Route::group(['middleware' => 'auth'], function() {
    Route::group(['prefix' => 'account'], function() {
        Route::get('/', IndexController::class)->name('account');
        Route::get('/logout', function() {
            Auth::logout();
            return redirect()->route('login');
        })->name('account.logout');
    });

//admin
Route::group(['prefix' => 'admin', 'middleware' => 'admin'], function() {
        Route::resource('/categories', CategoryController::class);
        Route::resource('/news', AdminNewsController::class);
        Route::resource('/review', FeedbackController::class);
        Route::resource('/order', AdminOrdersController::class); 
        Route::resource('/profile', ProfileController::class);
        Route::get('/parser', [ParserController::class, 'index'])
            ->name('parser');
    });

});

//news
Route::get('/', [NewsController::class, 'index']);

Route::get('/category', [NewsController::class, 'newsCategoryShow']) 
    ->name('newsCategory');

Route::get('/category/{id}/news', [NewsController::class, 'newsOutput']) 
    ->where('id', '\d+')
    ->name('news');

Route::get('/news/{id}', [NewsController::class, 'newsShow'])
    ->where('id', '\d+')
    ->name('newsshow');

//form
Route::group(['prefix' => 'form'], function() {
    Route::resource('/reviews', ReviewsController::class)
        ->name('index', 'reviews');
    Route::resource('/orders', OrdersController::class) 
        ->name('index', 'orders');
});

/*Route::get('/session', function() {
    $session = session()->all();
    dd($session);
});*/

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//auth.vk
Route::group(['middleware' => 'guest'], function() {
    Route::get('/login/vk', [SocialController::class, 'login'])->name('login.vk');
    Route::get('/callback/vk', [SocialController::class, 'callback'])->name('callback.vk');
});
