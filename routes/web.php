<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Models\Category;
use App\Models\Project;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    $category = Category::latest()->take(4)->get();
    $project = Project::latest()->take(4)->get();
    return view('home', [
        'title' => "SemuaBeli | Creative Solution at Your Hand",
        'projects' => $project,
        'category'=> $category
    ]);
});

Route::get('/template', function(){
    $project = Project::all();
    return view('template', [
        'title' => "SemuaBeli | Template",
        'projects' => $project
    ]);
});

Route::get('/{category:slug}', function(Category $category){
    // Eager load the 'project' relationship and get the instance of the category
    $category = Category::with('project')->where('slug', $category->slug)->firstOrFail();

    return view('project-by-category', [
        'title' => "SemuaBeli | {$category->name}",
        'category' => $category,
        'projects' => $category->project
    ]);
});

Route::get('/login',[LoginController::class, 'index']);
Route::post('/login',[LoginController::class, 'authenticate']);
Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);
Route::get('/dashboard', [DashboardController::class, 'index']);
