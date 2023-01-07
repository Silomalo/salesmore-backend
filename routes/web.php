<?php

use Illuminate\Support\Facades\Route;
// use category controller
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ExploitController;
use App\Http\Controllers\YoutubeController;
use App\Http\Controllers\ImageController;


/* sliders */





/* Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard'); */

Route::get(
    'slidersAPI',
    'App\Http\Controllers\CompanyController@slidesAPI'
);
Route::get('productsAPI', 'App\Http\Controllers\ProjectController@productsAPI');

Route::get('/safisha', 'App\Http\Controllers\ExploitController@clean');
Route::get('/', 'App\Http\Controllers\ExploitController@login');
Route::get('/quit', 'App\Http\Controllers\ExploitController@logout');
Route::POST('/storeQuote', 'App\Http\Controllers\ExploitController@addQuote');
Route::get('/access', 'App\Http\Controllers\ExploitController@login');
Route::POST('/packagedfiles', [ExploitController::class, 'attachedFiles'])->name('ck.upload');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', 'App\Http\Controllers\ExploitController@home')->name('dashboard')->middleware('Checker');

Route::middleware(['Check'])->group(function () {
    /* adminpanel */
    Route::get('/reg', 'App\Http\Controllers\ExploitController@newuser');
    Route::get('/dashboard', 'App\Http\Controllers\ExploitController@dash')->name('admin.dashboard');
    Route::get(
        '/admin-home',
        'App\Http\Controllers\CompanyController@slides'
    );
    Route::POST(
        '/addSlider',
        'App\Http\Controllers\CompanyController@slider'
    ); // 1
    Route::get('/deleteSlider/{id}', 'App\Http\Controllers\CompanyController@destroySlider');
    Route::POST('/updateCrImage', 'App\Http\Controllers\CompanyController@updateImage');

    /* categories */
    Route::get('/Categories', [CategoryController::class, 'index']);
    Route::POST('/newcategory', [CategoryController::class, 'store']);
    Route::POST('/updateCategory', [CategoryController::class, 'update'])->name('categories.update');
    Route::get('/deleteCategory/{id}', [CategoryController::class, 'destroy'])->name('categories.destroy');
    // products
    Route::get('/Products', 'App\Http\Controllers\ProjectController@proAdmin');
    Route::POST('/addProjects', 'App\Http\Controllers\ProjectController@project');
    Route::POST('/editProducts/{id}', 'App\Http\Controllers\ProjectController@updatingProject')->name('products.update');
    Route::POST('/deleteProject/{id}', 'App\Http\Controllers\ProjectController@destroyProject')->name('products.destroy');
    Route::get('/admin-quotations', 'App\Http\Controllers\ExploitController@quoAdmin');
    //total quoataions status
    Route::POST('/totalQuotations', 'App\Http\Controllers\QuotationController@toggleState')->name('quotation.toggle');
    // delete quotation
    Route::POST('/deleteQuotation/{id}', 'App\Http\Controllers\QuotationController@destroy')->name('quotation.destroy');
    //prifles
    Route::get('/profile', 'App\Http\Controllers\ExploitController@profilepage');
    Route::POST('/updateProfile', 'App\Http\Controllers\ExploitController@updateProfile');

    //adding images and youtube videos
    Route::get('/productimages/{pid}', [ImageController::class, 'index']);
    //upload video
    Route::POST('/updatevideo', [YoutubeController::class, 'store']);
    Route::POST('/newproductimage', [ImageController::class, 'store']);
    Route::POST('/updateproductimage', [ImageController::class, 'update']);
    Route::POST('/deleteimagedetails/{id}', [ImageController::class, 'destroy'])->name('image.destroy');

});

Route::middleware(['Admin'])->group(function () {
    Route::get('users', 'App\Http\Controllers\ExploitController@showuser');
    //new user
    Route::POST('/newuser', 'App\Http\Controllers\ExploitController@newuser');
    // edit user
    Route::POST('/editUser', 'App\Http\Controllers\ExploitController@editUser');
    Route::POST('/deleteUser/{id}', 'App\Http\Controllers\ExploitController@destroyUser')->name('users.destroy');
});
