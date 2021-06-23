<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\DistrictController;
use App\Http\Controllers\Backend\SubCategoryController;
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


Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin/logout', [AdminController::class, 'logout'])->name('admin.logout');

// Category router
Route::get('/categories', [CategoryController::class, 'index'])->name('categories');
Route::get('/category/add', [CategoryController::class, 'addCategory'])->name('category.add');
Route::post('/category/store', [CategoryController::class, 'storeCategory'])->name('category.store');
Route::get('/category/edit/{id}', [CategoryController::class, 'editCategory'])->name('category.edit');
Route::post('/category/update/{id}', [CategoryController::class, 'updateCategory'])->name('category.update');
Route::get('/category/delete/{id}', [CategoryController::class, 'deleteCategory'])->name('category.delete');

// Sub categories route
Route::get('/subcategories', [SubCategoryController::class, 'index'])->name('subcategories');
Route::get('/subcategories/add', [SubCategoryController::class, 'addSubCate'])->name('subcategory.add');
Route::post('/subcategories/store', [SubCategoryController::class, 'storeSubCategory'])->name('subcategory.store');
Route::get('/subcategory/edit/{id}', [SubCategoryController::class, 'editSubCategory'])->name('subcategory.edit');
Route::post('/subcategory/update/{id}', [SubCategoryController::class, 'updateSubCategory'])->name('subcategory.update');
Route::get('/subcategory/delete/{id}', [SubCategoryController::class, 'deleteSubCategory'])->name('subcategory.delete');

// District route
Route::get('/district', [DistrictController::class, 'index'])->name('district');
Route::get('/district/add', [DistrictController::class, 'addDistrict'])->name('district.add');
Route::post('/district/store', [DistrictController::class, 'storeDistrict'])->name('district.store');
Route::get('/district/edit/{id}', [DistrictController::class, 'editDistrict'])->name('district.edit');
Route::post('/district/update/{id}', [DistrictController::class, 'updateDistrict'])->name('district.update');
Route::get('/district/delete/{id}', [DistrictController::class, 'deleteDistrict'])->name('district.delete');

// Admin dashboard route
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('admin.index');
})->name('dashboard');
