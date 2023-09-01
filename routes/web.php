<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\crudsController;
use App\Http\Controllers\supplierController;


//Employee Route
Route::redirect('/', 'employee');
Route::get('employee/index', [crudsController::class, 'index'])->name('employee.all');
Route::get('/employees', [crudsController::class, 'index'])->name('employee.index');
Route::get('employee/create', [crudsController::class, 'create'])->name('employee.create');
Route::get('employee/{id}/edit', [crudsController::class, 'edit'])->name('employee.edit');
Route::post('employee/store', [crudsController::class, 'store'])->name('employee.store');
Route::put('employee/{id}/edit', [crudsController::class, 'update'])->name('employee.update');
Route::get('employee/{id}', [crudsController::class, 'show'])->name('employee.show');
Route::delete('employee/{id}', [crudsController::class, 'destroy'])->name('employee.destroy');


//Supplier Route
Route::redirect('/','supplier');
Route::get('supplier/index', [supplierController::class, 'index'])->name('supplier.all');
Route::get('/supplier', [supplierController::class, 'index'])->name('supplier.index');
Route::get('supplier/create', [supplierController::class, 'create'])->name('supplier.create');
Route::get('supplier/{id}/edit', [supplierController::class, 'edit'])->name('supplier.edit');
Route::post('supplier/store', [supplierController::class, 'store'])->name('supplier.store');
Route::post('supplier/update', [supplierController::class, 'update'])->name('supplier.update');
Route::get('supplier/{id}', [supplierController::class, 'show'])->name('supplier.show');
Route::delete('supplier/{id}', [supplierController::class, 'destroy'])->name('supplier.destroy');


//route::get('edit',[crudsController::class, 'edit']);
//route::get('/',function(){ return view('employee.index'); });
//route::get('edit',function(){ return view('employee.edit'); });
//Route::get('employee/create', [crudsController::class, 'create'])->name('employee.create');


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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/login',function(){
//     return view('form');
// });


  

// Route::get('mekskie', function () {
//     return view('admin.admin');
// });

// Route::get('admin', [AdminController::class, 'index'])->name('admin.list');

// Route::post('mekskie', function () {
//     return view('admin.admin');
// });

// Route::resource('admin', AdminController::class);

// Route::put('admin', AdminController::class); - Insert into database
// Route::destroy('admin', AdminController::class); - Delete into database