<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\studentController;
use App\Http\Controllers\professorController;
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
Route::get('/ActivityCoordinatorsCreate', function () {
    return view('/admin/createView/activitycoordinatorsCreate');
});


Route::get('/createStuUser', function () {
    return view('/admin/user/createStu');
});

//Student Management
Route::controller(studentController::class)->group(function () {
    //show manage Student page
    Route::get('/manageStudent', 'showManageView')->name('student.manage');

    //Create Student
    Route::get('/createFormStudent', 'showCreateView')->name('student.showCreate');
    Route::post('/createStudent', 'create')->name('student.create');


});

Route::controller(professorController::class)->group(function () {
    //show manage Professor page
    Route::get('/manageProfessor', 'showManageView')->name('professor.manage');

    //Create Professor
    Route::get('/createFormProfessor', 'showCreateView')->name('professor.showCreate');
    Route::post('/createProfessor', 'create')->name('professor.create');
});

Route::get('/ProfessorCreate', function () {
    return view('/admin/createView/professorCreate');
});

Route::get('/ActivitycoordinatorsManagement', function () {
    return view('/admin/managementView/activitycoordinatorsManage');
});
Route::get('/FacultyManagement', function () {
    return view('/admin/managementView/faculty-areaManage');
});
Route::get('/FacultyCreate', function () {
    return view('/admin/createView/facultyCreate');
});
Route::get('/AreaCreate', function () {
    return view('/admin/createView/areaCreate');
});
Route::get('/StudentManagement', function () {
    return view('/admin/managementView/studentManage');
});
Route::get('/AdminManagement', function () {
    return view('/admin/managementView/adminManage');
});
Route::get('/ProfessorManagement', function () {
    return view('/admin/managementView/professorManage');
});
Route::get('/AdminCreate', function () {
    return view('/admin/createView/admincreate');
});


///////////////////Edit
Route::get('/AdminEdit', function () {
    return view('/admin/editView/adminEdit');
});
Route::get('/StudentEdit', function () {
    return view('/admin/editView/studentEdit');
});
Route::get('/ProfessorEdit', function () {
    return view('/admin/editView/professorEdit');
});
Route::get('/ActivityCoordinatorsEdit', function () {
    return view('/admin/editView/activitycoordinatorsEdit');
});
Route::get('/AreaEdit', function () {
    return view('/admin/editView/areaEdit');
});
Route::get('/FacultyEdit', function () {
    return view('/admin/editView/facultyEdit');
});
