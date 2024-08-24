<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Middleware\Admin;

route::get('/',[HomeController::class, 'index']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

route::get('/home',[AdminController::class, 'index'])->middleware('is_admin');
route::get('/category_page',[AdminController::class, 'category_page'])->middleware('is_admin');
route::post('/add_category',[AdminController::class, 'add_category'])->middleware('is_admin');
route::get('/cat_delete/{id}',[AdminController::class, 'cat_delete'])->middleware('is_admin');
route::get('/edit_category/{id}',[AdminController::class, 'edit_category'])->middleware('is_admin');
route::post('/update_category/{id}',[AdminController::class, 'update_category'])->middleware('is_admin');

route::get('/add_book',[AdminController::class, 'add_book'])->middleware('is_admin')->middleware('is_admin');
route::post('/store_book',[AdminController::class, 'store_book'])->middleware('is_admin')->middleware('is_admin');

route::get('/show_book',[AdminController::class, 'show_book'])->middleware('is_admin');
route::get('/book_delete/{id}',[AdminController::class, 'book_delete'])->middleware('is_admin');
route::get('/edit_book/{id}',[AdminController::class, 'edit_book'])->middleware('is_admin');
route::post('/update_book/{id}',[AdminController::class, 'update_book'])->middleware('is_admin');
route::get('/book_details/{id}',[HomeController::class, 'book_details']);
route::get('/borrow_books/{id}',[HomeController::class, 'borrow_books']);
route::get('/borrow_request',[AdminController::class, 'borrow_request'])->middleware('is_admin');
route::get('/approve_book/{id}',[AdminController::class, 'approve_book'])->middleware('is_admin');
route::get('/return_book/{id}',[AdminController::class, 'return_book'])->middleware('is_admin');
route::get('/rejected_book/{id}',[AdminController::class, 'rejected_book'])->middleware('is_admin');
route::get('/log_out',[AdminController::class, 'log_out']);
route::get('/book_history',[HomeController::class, 'book_history']);
route::get('/cancel_req/{id}',[HomeController::class, 'cancel_req']);
route::get('/ret_books/{id}',[HomeController::class, 'ret_books']);
route::get('/explore',[HomeController::class, 'explore']);
route::get('/search',[HomeController::class, 'search']);
route::get('/cat_search/{id}',[HomeController::class, 'cat_search']);