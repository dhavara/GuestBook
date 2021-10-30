<?php

use App\Models\Project;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ProjectResourceController;
use App\Http\Controllers\CourseResourceController;
use App\Http\Controllers\Controller;
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

Route::get('/', [Controller::class, 'home']); //di controller karena tidak mangambil data dari model Project

Route::get('/contact', [Controller::class, 'contact']);

// Route::get('/myproject', [ProjectController::class, 'index']); //di projectController karena mengambil data dari model Project

// Route::get('/myproject/{code}', [ProjectController::class, 'show']);

// Route::get('/createproject', [ProjectController::class, 'createProject']);
// Route::post('/createproject', [ProjectController::class, 'createProjectPost']);

// Route::get('/editproject/{code}', [ProjectController::class, 'editProject']);
// Route::post('/editproject/{code}', [ProjectController::class, 'editProjectPost']);

// Route::get('/mycourse', [CourseController::class, 'index']);

// Route::get('/mycourse/{code}', [CourseController::class, 'show']);

// Route::get('/createcourse', [CourseController::class, 'createCourse']);
// Route::post('/createcourse', [CourseController::class, 'createCoursePost']);

// Route::get('/editcourse/{code}', [CourseController::class, 'editCourse']);
// Route::post('/editcourse/{code}', [CourseController::class, 'editCoursePost']);

Route::resource('/myproject', ProjectResourceController::class);
Route::resource('/mycourse', CourseResourceController::class);