<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/homepage', function () {
    return view('homepage');
});

Route::get('/Manage Committee Election/StudCandidateListPage', function () {
    return view('Manage Committee Election/StudCandidateListPage');
});

Route::get('/Manage Committee Election/test', function () {
    return view('Manage Committee Election/test');
});

Route::get('/Manage Registration/Lecturer/addLecturerProfile', function () {
    return view('Manage Registration/Lecturer/addLecturerProfile');
});

Route::get('/Manage Registration/Student/addStudentProfile', function () {
    return view('Manage Registration/Student/addStudentProfile');
});

Route::get('/Manage Registration/RegNewMem', function () {
    return view('Manage Registration/RegNewMem');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');    
});
