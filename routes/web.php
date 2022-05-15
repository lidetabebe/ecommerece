<?php
use App\Models\Catagory;
use App\Models\products;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\productsController;
use App\Http\Controllers\CatagoryController;

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
Route::get('/products/register', [productsController::class, 'register'])->name('products/register');
Route::post('/products/register', [productsController::class, 'store'])->name('products/register');


Route::get('/Catagory/register', [CatagoryController::class, 'register'])->name('Catagory/register');
Route::post('/Catagory/register', [CatagoryController::class, 'store'])->name('Catagory/register');
Route::get('/Catagory/get_all', [CatagoryController::class, 'get_all'])->name('Catagory/get_all');
Route::get('/Catagory/get_by_id/{id}', [CatagoryController::class, 'get_by_id'])->name('Catagory/get_by_id');


Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController ::class, 'index'])->name('home');
Route::get('/products/get_all', [productsController::class, 'get_all'])->name('products/get_all');
Route::get('/products/search/{id}', [productsController::class, 'get_by_id']);