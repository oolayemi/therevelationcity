<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;

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

Route::get('/', [\App\Http\Controllers\HomeController::class, 'index']);
Route::any('*', function () {
    $twoBlogs = \App\Models\Blog::take(2)->get();
    return View::make('helpers.footer', ["twoBlogs" => $twoBlogs]);
});

Route::post('/', [\App\Http\Controllers\GalleryController::class, 'store'])->name('gallery.store');


Route::view('/about', 'about')->name('about');
Route::view('/ministries', 'ministries')->name('ministries');
Route::view('/contact', 'contact')->name('contact');
Route::view('/give', 'give')->name('give');
Route::view('/live', 'live')->name('live');
Route::view('/rcacademy', 'rcacademy')->name('reacademy');

Route::post('/talktopastor', [\App\Http\Controllers\SendEmailController::class, 'talkToPastor'])->name('talktopastor');
Route::post('/joinaserviceunit', [\App\Http\Controllers\SendEmailController::class, 'joinServiceUnit'])->name('joinaserviceunit');
Route::post('/contactemail', [\App\Http\Controllers\SendEmailController::class, 'contactemail'])->name('contactemail');


Route::view('/ministries', 'ministries')->name('ministries');
Route::view('/call-ministry', 'ministries.call-ministry')->name('call-ministry');
Route::view('/creative-ministry', 'ministries.creative-ministry')->name('creative-ministry');
Route::view('/hospitality-ministry', 'ministries.hospitality-ministry')->name('hospitality-ministry');
Route::view('/kidzteens-ministry', 'ministries.kidzteens-ministry')->name('kidzteens-ministry');
Route::view('/technical-ministry', 'ministries.technical-ministry')->name('technical-ministries');
Route::view('/socialaction-ministry', 'ministries.socialaction-ministry')->name('socialaction-ministry');


Route::get('/sermons', [\App\Http\Controllers\SermonController::class, 'index'])->name('sermons');
Route::get('/sermon/{id}', [\App\Http\Controllers\SermonController::class, 'show'])->name('sermon.show');
Route::post('/sermons', [\App\Http\Controllers\SermonController::class, 'store'])->name('sermon.store');
Route::delete('/sermons/{id}', [\App\Http\Controllers\SermonController::class, 'destroy'])->name('sermon.destroy');


Route::get('/events', [\App\Http\Controllers\EventController::class, 'index'])->name('event');
Route::post('/event', [\App\Http\Controllers\EventController::class, 'store'])->name('event.store');
Route::delete('/event/{id}', [\App\Http\Controllers\EventController::class, 'destroy'])->name('event.destroy');


Route::get('/blog', [\App\Http\Controllers\BlogController::class, 'index'])->name('blog');
Route::get('/blog/{id}', [\App\Http\Controllers\BlogController::class, 'show'])->name('blog.show');
Route::post('/blog', [\App\Http\Controllers\BlogController::class, 'store'])->name('blog.store');
Route::delete('/blog/{id}', [\App\Http\Controllers\BlogController::class, 'destroy'])->name('blog.destroy');


Route::post('/comment/store', [\App\Http\Controllers\CommentController::class, 'store'])->name('comment.store');


Auth::routes();
