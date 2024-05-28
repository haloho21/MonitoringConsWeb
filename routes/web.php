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

Route::get('/', function () {
    return view('welcome');
});

*/

// LOGIN ROUTE
Route::middleware('loginpage')->group(function(){
    Route::post('login', 'LoginController@login')->name('login');
    Route::get('', 'LoginController@beforelogin')->name('beforelogin');
});


Route::middleware('authenticated')->group(function(){
  
    // DASHBOARD ROUTE
    Route::get('/home', 'dashboardController@index')->name('dashboard');

    // PROJECT ROUTE
    Route::get('project', 'projectController@index')->name('project');
    Route::post('project_store', 'projectController@store')->name('project_store');
    Route::delete('project_delete', 'projectController@destroy')->name('project_delete');
    Route::patch('editProject', 'projectController@edit')->name('editProject');
    Route::get('/viewUpdateProject/{project_id}/updateDetailProject', 'projectController@view_update')->name('viewUpdateProject');
    Route::get('/viewProject_PrintPDF/{project_id}', 'projectController@viewProject_PrintPDF')->name('viewProject_PrintPDF');
    Route::get('/viewUpdateAanwijzing/{project_id}/updateAanwijzingProject', 'projectController@view_aanwijzing')->name('viewUpdateAanwijzing');
    Route::get('/ApprovalProject', 'projectController@ApprovalProject')->name('ApprovalProject');
    Route::post('/submitApprovalProject', 'projectController@submitApprovalProject')->name('submitApprovalProject');
    Route::delete('/CancelApprovalProject', 'projectController@CancelApprovalProject')->name('CancelApprovalProject');


    // UPDATE PROJECT ROUTE with AJAX
    Route::post('addData','projectController@addMorePost')->name('addData');
    Route::post('submitUpdateProgress','projectController@submitUpdateProgress')->name('submitUpdateProgress');

    // INDEX ADMININSTARTOR ROUTE
    Route::get('administrator', 'administratorController@index')->name('administrator');

    // USER ROUTE
    Route::post('addUser', 'administratorController@store')->name('addUser');
    Route::patch('editUser', 'administratorController@edit')->name('editUser');
    Route::delete('deleteUser', 'administratorController@destroy')->name('deleteUser');

    // VENDOR ROUTE
    Route::post('addVendor', 'administratorController@store_vendor')->name('addVendor');
    Route::patch('editVendor', 'administratorController@editVendor')->name('editVendor');
    Route::delete('deleteVendor', 'administratorController@destroy_vendor')->name('deleteVendor');

    // DESIGNATOR ROUTE
    Route::post('addDesignator', 'administratorController@store_designator')->name('addDesignator');
    Route::patch('editDesignator', 'administratorController@edit_designator')->name('editDesignator');
    Route::delete('deleteDesignator', 'administratorController@destroy_designator')->name('deleteDesignator');
});

// LOGOUT ROUTE
Route::get('logout', 'LoginController@logout')->name("logout");