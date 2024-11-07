<?php

use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\pdfController;
use Illuminate\Support\Facades\Route;


// Route::get('/', function () {
//     return view('welcome');
// });

Route::redirect('/', '/employee');
Route::resource('employee',EmployeeController::class);
Route::get('pdf', [pdfController::class, 'pdf_demo'])->name('employee.pdf');
Route::get('employeepdf', [pdfController::class, 'pdf_all_employee'])->name('allemployee.pdf');
Route::get('employeepdf/{id}', [pdfController::class, 'pdf_first'])->name('firstemployee.pdf');