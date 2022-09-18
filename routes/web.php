<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\UpdateProfileInformationController;
use App\Http\Controllers\LeaveController;
use App\Http\Controllers\EntryController;
use App\Http\Controllers\PasswordController;
use App\Http\Controllers\DeleteUserController;
use App\Http\Controllers\DeleteAllLeaveController;
use App\Http\Controllers\UpdateEmployeeController;
use App\Http\Controllers\ApproveRejectController;
use App\Http\Controllers\UploadPhotoController;
use App\Http\Controllers\LeaveListController;
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

Route::get('/', function () {
    return view('userlogin');
});

Route::get('/newuser', function () {
    return view('newuser');
});

Route::get('/profile', function () {
    return view('profile');
});

/* Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    
});*/

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::post('/logout', [LogoutController::class, 'logout']);

//Route::get('/editpass', 'App\Http\Controllers\UpdateProfileInformationController@editpass');

Route::get('/modify', function () {
    return view('modify');
});

Route::get('/editpass', function () {
    return view('editpass');
});

Route::get('/applyleave', function () {
    return view('applyleave');
});

Route::get('/forgotpassword', function () {
    return view('forgotpassword');
});

Route::get('/admindashboard', function () {
    return view('admindashboard');
});

Route::get('/employeelist', function () {
    return view('employeelist');
});

Route::get('/listofleave', function () {
    return view('listofleave');
});

Route::get('/editemployee', function () {
    return view('editemployee');
});

Route::get('admindashboard', [LeaveController::class, 'leaveindex']); //display all users' leave records 
Route::get('dashboard', [LeaveController::class, 'userindex']); //display user's own leave records

//Route::get('listofleave', [LeaveListController::class, 'pending']); // display pending records table 

Route::get('applyleave', [LeaveController::class, 'applyleave']);
Route::put('insert-data', [LeaveController::class, 'insert']);

Route::get('modify', [UpdateProfileInformationController::class, 'modify']);
Route::put('update-data', [UpdateProfileInformationController::class, 'update']);

Route::get('newuser', [EntryController::class, 'newuser']);
Route::put('register-user', [EntryController::class, 'register']);

Route::get('employeelist', [EntryController::class, 'index']);

Route::get('edit/{id}', [UpdateEmployeeController::class, 'edit']);
Route::put('edit-employee/{id}', [UpdateEmployeeController::class, 'update']);

Route::get('approve/{id}', [ApproveRejectController::class, 'approve']);
Route::put('approve-employee/{id}', [ApproveRejectController::class, 'approved']);

Route::get('delete-records', [DeleteUserController::class, 'index']);
Route::get('delete/{id}', [DeleteUserController::class, 'destroy']);

Route::get('delete-row-leave', [DeleteAllLeaveController::class, 'index']);
Route::get('delete/{id}', [DeleteAllLeaveController::class, 'destroy']);

//Route::get('delete-employee', [EntryController::class, 'destroy']);

Route::get('/',  [EntryController::class, 'userlogin']);
Route::post('login-user', [EntryController::class, 'loginuser'])->name('login-user');
//Route::post('/login', 'App\Http\Controllers\EntryController@loginuser');

//Route::get('editpass', 'PasswordController@edit');
//Route::patch('new-password', 'PasswordController@update')->name('new-password');

//Route::get('editpass',  [PasswordController::class, 'editpass']);
//Route::post('change-password', [PasswordController::class, 'change'])->name('change-password');

Route::get('/editpass', [App\Http\Controllers\PasswordController::class, 'showChangePasswordGet'])->name('changePasswordGet');
Route::post('/changePassword', [App\Http\Controllers\PasswordController::class, 'changePasswordPost'])->name('changePasswordPost');

Route::put('approve-req/{id}', [ApproveRejectController::class, 'update']);
Route::put('reject-req/{id}', [ApproveRejectController::class, 'reject']);




//Route::put('/modify', [UploadPhotoController::class, 'photoindex'])->name('photouser');

