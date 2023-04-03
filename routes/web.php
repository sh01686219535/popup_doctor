<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BranchController;
use App\Http\Controllers\Departmentcontroller;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\PatientController;

Route::get('/',[HomeController::class,'index'])->name('/');

Route::get('/doctor-department/ajax/{id}',[HomeController::class,'getDepartment'])->name('doctor.ajax');
Route::get('/doctor-profile/ajax/{doctor_id}',[HomeController::class,'getDoctor'])->name('doctor.ajax');
Route::get('/doctor.profile/{id}',[HomeController::class,'doctorProfile'])->name('doctor.profile');

//Branch
Route::post('/add-branch',[BranchController::class,'addBranch'])->name('add.branch');
Route::post('/update-branch',[BranchController::class,'updateBranch'])->name('update.branch');
Route::get('/delete-branch/{id}',[BranchController::class,'deleteBranch'])->name('delete.branch');
//Department
Route::post('/add-department',[Departmentcontroller::class,'addDepartment'])->name('add.department');
Route::post('/update-department',[Departmentcontroller::class,'updateDepartment'])->name('update.department');
Route::get('/delete-department/{id}',[Departmentcontroller::class,'deleteDepartment'])->name('delete.department');
//Doctor
Route::post('/add-doctor',[DoctorController::class,'addDoctor'])->name('add.doctor');
Route::post('/update-doctor',[DoctorController::class,'updateDoctor'])->name('update.doctor');
Route::get('/delete-doctor/{id}',[DoctorController::class,'deleteDoctor'])->name('delete.doctor');

// Patient
Route::post('/add.patient',[PatientController::class,'addPatient'])->name('add.patient');
Route::post('/update.patient',[PatientController::class,'updatePatient'])->name('update.patient');
Route::get('/delete.patient/{id}',[PatientController::class,'deletePatient'])->name('delete.patient');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});





