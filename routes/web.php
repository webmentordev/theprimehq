<?php

use App\Livewire\Home;
use App\Livewire\About;
use App\Livewire\Contact;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Livewire\Order\Cancel;
use App\Livewire\Order\Success;
use App\Livewire\Purchase;

Route::group(['prefix' => '{locale}', 'where' => ['locale' => '[a-zA-Z]{2}']], function () {
    Route::get('/', Home::class)->name('home');
    Route::get('/about', About::class)->name('about');
    Route::get('/contact', Contact::class)->name('contact');
    Route::get('/purchase', Purchase::class)->name('purchase');

    Route::get('/success/{order:checkout_id}', Success::class)->name('success');
    Route::get('/cancel/{order:checkout_id}', Cancel::class)->name('cancel');

});

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/contacts', [DashboardController::class, 'contacts'])->name('contacts');
    Route::delete('/contact/delete/{contact}', [DashboardController::class, 'delete_contact'])->name('delete.contact');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/', function () {
    return redirect('de');
});

require __DIR__.'/auth.php';