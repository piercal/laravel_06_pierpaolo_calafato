<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class,'home'])->name('home');

Route::get('/about-us', [HomeController::class,'aboutUs'])->name('about-us');

//rotta parametrica
Route::get('/member/{id}', [HomeController::class,'member'])->name('member');

Route::get('/ticket',[TicketController::class,'showForm'])->name('ticket.showForm');

Route::post('/send-ticket',[TicketController::class,'sendTicket'])->name('ticket.send');