<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'store.index')->name('store.home');

Route::view('/admin', 'admin.dashboard')->name('admin.dashboard');

Route::permanentRedirect('/index', '/')->name('store.index');
Route::permanentRedirect('/index.html', '/')->name('store.legacy-index');

Route::get('/{page}', function (string $page) {
    $view = "store.{$page}";

    abort_unless(view()->exists($view), 404);

    return view($view);
})->where('page', '[a-z0-9-]+')->name('store.page');

Route::get('/{page}.html', function (string $page) {
    abort_unless(view()->exists("store.{$page}"), 404);

    return redirect()->to($page === 'index' ? '/' : "/{$page}", 301);
})->where('page', '[a-z0-9-]+')->name('store.legacy-page');
