<?php

use App\Http\Controllers\CandidateController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CompanyController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('/company/add',[CompanyController::class, 'index'])->name('company.add');
Route::post('/company/create',[CompanyController::class, 'create'])->name('company.create');
Route::get('/candidate/add',[CandidateController::class, 'index'])->name('candidate.add');
Route::post('/candidate/create',[CandidateController::class, 'create'])->name('candidate.create');
Route::get('/candidate/list',[CandidateController::class, 'candidateList'])->name('candidate.list');

//Route::get('/candidates-list', [CandidateController::class, 'index']);
//Route::post('/candidates-contact', [CandidateController::class, 'contact']);

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {
    Route::get('/dashboard', function () {return view('dashboard');})->name('dashboard');
    Route::get('/profile/{id}',[CompanyController::class, 'index'])->name('company.profile');
    Route::get('/candidate/contact/{id}',[CandidateController::class, 'candidateContact'])->name('candidate.contact');
    Route::get('/candidate/hire/{id}',[CandidateController::class, 'candidateHire'])->name('candidate.hire');
});
