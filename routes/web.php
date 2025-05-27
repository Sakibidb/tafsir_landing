<?php

use App\Http\Controllers\Frontend\LeadController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\LeadController as AdminLeadController;
use App\Http\Controllers\Admin\ContactController as AdminContactController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\PageController;


Route::get('/', [HomeController::class, 'index'])->name('home');

Auth::routes();
Route::get('admin', [AdminController::class, 'index'])->name('admin');


// Admin
Route::prefix('admin')->group(function () {
    Route::get('/leads', [AdminLeadController::class, 'index'])->name('leads.index');
    Route::get('/leads/list', [AdminLeadController::class, 'list'])->name('admin.leads.list');
    Route::get('/leads/{lead}', [AdminLeadController::class, 'show'])->name('leads.show');

    Route::get('/contacts', [AdminContactController::class, 'index'])->name('contacts.index');
    Route::get('/contacts/list', [AdminContactController::class, 'list'])->name('admin.contacts.list');
    Route::get('/contacts/{contact}', [AdminContactController::class, 'show'])->name('contacts.show');
});

// Frontend
Route::get('/frontend/home', [LeadController::class, 'create'])->name('frontend.home.create');
Route::post('/frontend/home/store', [LeadController::class, 'store'])->name('frontend.home.store');

Route::get('/contact', action: [ContactController::class, 'contact'])->name('frontend.contact');
Route::post('/contact/send', [ContactController::class, 'send'])->name('frontend.contact.send');
Route::get('/getstarted', action: [PageController::class, 'getstarted'])->name('frontend.getstarted');
