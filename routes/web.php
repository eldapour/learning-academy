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

Route::namespace('Front')->group(function (){

    Route::get('/', 'HomepageController@index')->name('front.homepage');
    Route::get('/cat/{id}', 'CourseController@cat')->name('front.cat');
    Route::get('/cat/{id}/course/{c_id}', 'CourseController@show')->name('front.show');
    Route::get('/contact', 'ContactController@index')->name('front.contact');
    Route::post('/message/newsletter', 'MessageController@newsletter')->name('front.message.newsletter');
    Route::post('/message/contact', 'MessageController@contact')->name('front.message.contact');
    Route::post('/message/enroll', 'MessageController@enroll')->name('front.message.enroll');
});

Route::namespace('Admin')->prefix('dashboard')->group(function (){

    Route::get('/login','AuthController@login')->name('admin.login');
    Route::post('/do-login','AuthController@doLogin')->name('admin.doLogin');

    //middleware
    Route::middleware('adminAuth:admin')->group(function (){
        Route::get('/logout','AuthController@logout')->name('admin.logout');
        Route::get('/','HomeController@index')->name('admin.home');

    //category
        Route::prefix('cats')->group(function (){

        Route::get('','CatController@index')->name('admin.cat.index');
        Route::get('/create','CatController@create')->name('admin.cat.create');
        Route::post('/store','CatController@store')->name('admin.cat.store');
        Route::get('/edit/{id}','CatController@edit')->name('admin.cat.edit');
        Route::post('/update','CatController@update')->name('admin.cat.update');
        Route::get('/delete/{id}','CatController@delete')->name('admin.cat.delete');
        });

    //courses
        Route::prefix('courses')->group(function (){

        Route::get('','CourseController@index')->name('admin.courses.index');
        Route::get('/create','CourseController@create')->name('admin.courses.create');
        Route::post('/store','CourseController@store')->name('admin.courses.store');
        Route::get('/edit/{id}','CourseController@edit')->name('admin.courses.edit');
        Route::post('/update','CourseController@update')->name('admin.courses.update');
        Route::get('/delete/{id}','CourseController@delete')->name('admin.courses.delete');
        });

    //students
        Route::prefix('students')->group(function (){

            Route::get('','StudentController@index')->name('admin.students.index');
            Route::get('/create','StudentController@create')->name('admin.students.create');
            Route::post('/store','StudentController@store')->name('admin.students.store');
            Route::get('/edit/{id}','StudentController@edit')->name('admin.students.edit');
            Route::post('/update','StudentController@update')->name('admin.students.update');
            Route::get('/delete/{id}','StudentController@delete')->name('admin.students.delete');
            Route::get('/showcourses/{id}','StudentController@showcourses')->name('admin.students.showcourses');
            Route::get('/student/{id}/courses/{c_id}/approve','StudentController@approveCourse')->name('admin.students.approvecourse');
            Route::get('/student/{id}/courses/{c_id}/reject','StudentController@rejectCourse')->name('admin.students.rejectcourse');
        });

    });

});
