<?php
use App\Imports\UsersImport;
use Maatwebsite\Excel\Facades\Excel;
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

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');





Route::prefix('student')->middleware('auth')->group(function () {

    Route::get('/importsdb', function () {
        return view('student.importsdb');
    });
    Route::post('/importsdb', 'student@store');
    Route::get('/giverr', 'student@index');
    Route::get('/delet/{id}', 'student@destroy');
    Route::get('/edit/{id}', 'student@edit');//صفحة التعديل
    Route::post('/edit4', 'student@edit4');//صفحة التعديل  edit4
    //  Route::get('/add_giver', function () {
    //     return view('student.add_giver'); });

    Route::get('/add_giver', 'student@add_giver1');
        Route::post('/add_giver', 'student@add_giver');
        Route::get('/ones/{id}', 'student@one_sc');

        Route::get('/stud', 'student@stud');


});




