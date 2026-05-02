<?php

use App\Http\Livewire\Chat\Main;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\ProductLikeController;

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

Route::get('/', function () {
    return view('home');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/home', function () {
        return view('home');
    })->name('home');
});
    Route::get('/home', function () {
        return view('home');
    })->name('home');

    Route::get('/our-products', [ProductsController::class, 'our_products'])->name('our_products');
    Route::get('/our-products/create', [ProductsController::class, 'our_products_create'])->name('our_products_create');
    Route::get('/categories/{slug}/edit', [ProductsController::class, 'our_products_edit'])->name('our_products_edit');

    Route::get('/gt-cakes', [ProductsController::class, 'gt_cakes'])->name('gt_cakes');
    Route::get('/gt-cakes/create', [ProductsController::class, 'gt_cakes_create'])->name('gt_cakes_create');
    Route::get('/gt-cakes/{slug}/edit', [ProductsController::class, 'gt_cakes_edit'])->name('gt_cakes_edit');

    Route::get('/gt-desserts', [ProductsController::class, 'gt_desserts'])->name('gt_desserts');
    Route::get('/gt-desserts/create', [ProductsController::class, 'gt_desserts_create'])->name('gt_desserts_create');
    Route::get('/gt-desserts/{slug}/edit', [ProductsController::class, 'gt_desserts_edit'])->name('gt_desserts_edit');

    Route::get('/gt-ice-creams', [ProductsController::class, 'gt_ice_creams'])->name('gt_ice_creams');
    Route::get('/gt-ice-creams/create', [ProductsController::class, 'gt_ice_creams_create'])->name('gt_ice_creams_create');
    Route::get('/gt-ice-creams/{slug}/edit', [ProductsController::class, 'gt_ice_creams_edit'])->name('gt_ice_creams_edit');

    Route::get('contact', [Controller::class, 'contact'])->name('contact');
    Route::get('about', [Controller::class, 'about'])->name('about');

    Route::get('unsubscribe-from-newsletter/{email}', [Controller::class, 'unsubscribe_from_newsletter'])->name('unsubscribe_from_newsletter');

    Route::get('your-favorites', [ProductLikeController::class, 'your_favorites'])->middleware('auth')->name('your_favorites');
    Route::post('your-favorites/{product}', [ProductLikeController::class, 'remove_from_favorites'])->middleware('auth')->name('remove_from_favorites');

    Route::get('your-orders', [OrderController::class, 'orders'])->middleware('auth')->name('orders');
    
    Route::post('cake/{cake}/like', [ProductLikeController::class, 'like_cake'])->middleware('auth')->name('like_cake');
    Route::post('dessert/{dessert}/like', [ProductLikeController::class, 'like_dessert'])->middleware('auth')->name('like_dessert');
    Route::post('ice-cream/{ice_cream}/like', [ProductLikeController::class, 'like_ice_cream'])->middleware('auth')->name('like_ice_cream');

    // Route::get('/chat', Main::class)->middleware('auth')->name('custom_cake');

    Route::get('/custom-cakes', [ProductsController::class, 'custom_cake'])->middleware('auth')->name('custom_cake');
    Route::get('/custom-cakes-view/{cake_order}', [ProductsController::class, 'custom_cake_view'])->middleware(['auth', 'can:edit_products'])->name('customcakes.view');