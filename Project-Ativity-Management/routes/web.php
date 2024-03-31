<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/profile', function () {
    return view('profile');
});
Route::get('/fileupload', function () {
    return view('fileupload');
});
Route::get('/activity', function () {
    return view('activity');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/filedowload', function () {
    return view('filedowload');
});
Route::get('/dashboard', function () {
    return view('/admin/dashboard');
});
Route::get('/createAcUser', function () {
    return view('/admin/user/createAc');
});
Route::get('/createStuUser', function () {
    return view('/admin/user/createStu');
});
Route::get('/createProUser', function () {
    return view('/admin/user/createPro');
});
Route::get('/AcManagement', function () {
    return view('/admin/user/ac');
});
Route::get('/faculManagement', function () {
    return view('/admin/faculty/create-fa-area');
});
Route::get('/createFaculty', function () {
    return view('/admin/faculty/create_fac');
});
Route::get('/createArea', function () {
    return view('/admin/faculty/create_area');
});
Route::get('/StuManagement', function () {
    return view('/admin/user/stu');
});
Route::get('/AdminManagement', function () {
    return view('/admin/user/admin');
});
Route::get('/ProManagement', function () {
    return view('/admin/user/pro');
});
