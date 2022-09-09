<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\TemplateController;
use Illuminate\Support\Facades\Auth;




Route::get('/', function () {
      return view('welcome');
     });
     Route::get('/comments', function () {
      return view('comments');
     });


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();
// Route::get('/admin', [BlogController::class,'index']);

Route::group(['middleware' => ['auth:admin']],function(){
      Route::get('/admin',[BlogController::class,'index'])->name('admin');
      Route::get('/create',[BlogController::class,'create']);
      Route::get('category/{id}',[BlogController::class,'categories'])->name('categories');
      Route::post('save',[BlogController::class,'store'])->name('saveblogs');
      Route::get('approve/{id}',[BlogController::class,'approve'])->name('approve');
      Route::post('update/{id}',[BlogController::class,'update'])->name('update');
      Route::get('edit/{id}',[BlogController::class,'edit'])->name('edit');
      Route::get('delete/{id}',[BlogController::class,'destroy'])->name('delete');
      Route::get('details/{id}',[TemplateController::class,'details']);
      Route::get('comment/{id}',[BlogController::class,'comment'])->name('comment');
     
      
       
});



// Route::group(['middleware'=>['guest::admin']],function(){
     

// });

Route::group(['middleware' => ['auth:writer']],function(){
      Route::get('/writer', [HomeController::class,'index']);   
      Route::get('/comments',[BlogController::class,'allcomments'])->name('comments');
});
 
Route::view('/welcome', 'welcome')->middleware('auth');
// Route::view('/admin', 'admin');
// Route::view('/writer', 'writer');

Route::post('/register/admin',[RegisterController::class,'createAdmin']);
Route::get('/register/admin',[RegisterController::class,'showAdminRegisterForm']);
Route::post('/login/admin',[LoginController::class,'adminLogin']);
Route::get('/login/admin',[LoginController::class,'showAdminLoginForm']);
Route::get('/login/writer',[LoginController::class,'showWriterLoginForm']);
Route::post('/login/writer',[LoginController::class,'writerLogin']);
Route::post('/register/writer',[RegisterController::class,'createWriter']);
Route::get('/register/writer',[RegisterController::class,'showWriterRegisterForm']);



Route::group(['middleware' => ['auth']], function() {
      Route::resource('roles', RoleController::class);
      Route::resource('users', UserController::class);
      Route::resource('products', ProductController::class);
  });









   
