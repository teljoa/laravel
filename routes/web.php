<?php

use App\Http\Controllers\TaskController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/your-route', function () {
    return view('dashboard');
})->name('your.route.name');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Rutas protegidas

    Route::get('/tasks', [TaskController::class, 'index'])->name('tasks.index');
    Route::get('/tasks/create', [TaskController::class, 'create'])->name('tasks.create');
    Route::post("tasks/create", [TaskController::class, 'store'])->name('tasks.store');
    Route::get('tasks/{tasks}', [TaskController::class, 'show'])->name('tasks.show');
    Route::get("tasks/{tasks}/edit", [TaskController::class, 'edit'])->name("tasks.edit");
    Route::patch('tasks/{tasks}', [TaskController::class, 'update'])->name('tasks.update');
    Route::delete('tasks/{tasks}', [TaskController::class, 'destroy'])->name('tasks.destroy');
});

require __DIR__ . '/auth.php';
