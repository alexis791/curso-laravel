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

Route::get('/', 'HomeController@index');

Route::get('/dashboard', 'DashboardController@index');

Route::resource('/expense_report','ExpenseReportController');

Route::get('/expense_report/{id}/confirmDelete','ExpenseReportController@confirmDelete');
Route::get('/expense_report/{expense_report}/expenses/create','ExpenseController@create');
Route::post('/expense_report/{expense_report}/expenses/store','ExpenseController@store');

Route::get('/expense_report/{expense_report}/confirmSendMail','ExpenseReportController@confirmSendMail');
Route::post('/expense_report/{id}/sendMail','ExpenseReportController@sendMail');