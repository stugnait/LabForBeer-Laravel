<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthenticatedSessionController;

Route::middleware(['auth'])->group(function () {

    Route::get('/', function () {
        return view('auth.login');
    });

    Route::get('/dashboard', function () {
        return view('admin.index');
    })->name('dashboard');

});

Route::controller(AdminController::class)->group(function () {
    Route::get('logout', 'destroy')->name('admin.logout');
    Route::get('/admin/profile', 'loadProfile')->name('admin.profile');
});

Route::controller(TaskController::class)->group(function () {
    Route::get('tasks/all', 'loadAll')->name('tasks.all');
    Route::get('tasks/new', 'loadNew')->name('tasks.new');
    Route::get('tasks/progress', 'loadProgress')->name('tasks.progress');
    Route::get('tasks/done', 'loadProgress')->name('tasks.done');
    Route::get('tasks/cancelled', 'loadCancelled')->name('tasks.cancelled');
});
require __DIR__ . '/auth.php';
