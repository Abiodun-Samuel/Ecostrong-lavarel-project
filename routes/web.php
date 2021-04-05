<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\VacancyFormController;


// Pages
Route::get('/', [PagesController::class, 'index']);
Route::get('/about_us', [PagesController::class, 'about'])->name('page', 'about_us');

Route::get('/properties', [PagesController::class, 'properties'])->name('page', 'properties');

Route::get('/services/{service_page}', [PagesController::class, 'services'])
->where('service_page', 'Business Management & Consultancy|Ecovest Investment & Training|General Trading & Contract|Project Investment Scheme|Project Management|Real Estate & Properties Management');


// Forms 
Route::get('/forms/{form_page}', [FormController::class, 'forms'])
->where('form_page', 'Business Management & Consultancy|Ecovest Investment & Training|General Trading & Contract|Project Investment Scheme|Project Management'); 

Route::post('/send-form', [FormController::class, 'formEmail'])->name('form.send');

// Contact 
Route::get('/contact_us', [ContactController::class, 'contact']);
Route::post('/send-message', [ContactController::class, 'sendEmail'])->name('contact.send');

// Vacancy
Route::get('/forms/vacancy', [VacancyFormController::class, 'vacancy']);
Route::post('/forms/submit', [VacancyFormController::class, 'vacancySubmit'])->name('vacancy.submit');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
