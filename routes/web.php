<?php

use Illuminate\Support\Facades\Route;

// @include_once('admin_web.php');

// Route::get('/', function () {
//     return redirect()->route('index');
// })->name('index');

Route::redirect('/home', '/admin/dashboard', 301);

Route::view('/', 'app.welcome')->name('index');
Route::post('/users/{id}', [App\Http\Controllers\Admin\DashboardController::class, 'index']);
// Route::view('/borrow', 'app.borrow')->name('borrow');
Route::get('/borrow', [App\Http\Controllers\Admin\BorrowController::class, 'borrow'])->name('borrow');
Route::view('/visitor', 'app.components.visitor')->name('visitor');

// Success Borrowed
Route::get('/borrow/{borrowId}', [App\Http\Controllers\Admin\BorrowController::class, 'borrowedBook'])->name('borrow.success');

Route::prefix('admin')->group(function () {
    // Route::view('/logs', 'app.admin.visitor.index')->name('admin.logs');
    Route::resource('/logs', App\Http\Controllers\Admin\VisitorLogsController::class);
    Route::resource('/borrow', App\Http\Controllers\Admin\BorrowController::class);

    Route::middleware(['auth', 'admin'])->group(function () {
        Route::get('/dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('admin.dashboard');
        // Route::view('/books', 'app.admin.visitor.index')->name('admin.monitor');
        Route::get('/monitor', [App\Http\Controllers\Admin\MonitorController::class, 'index'])->name('admin.monitor');
        Route::resource('/books', App\Http\Controllers\Admin\BooksController::class);
    });
});

Auth::routes();