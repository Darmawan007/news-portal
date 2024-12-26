<?php

use App\Http\Controllers\AdminUserController;
use App\Models\News;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardNewsController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/news', function () {
    return view('news',['title' => 'News',  'newss' => News::filter(request(['search', 'category', 'author']))->latest()->paginate(6)->withQueryString()]);
});
Route::get('/news/{news:slug}', function (News $news) {
        return view('news-detail', ['title' => 'News Detail', 'news' => $news]);
});
Route::get('/authors/{user:username}', function (User $user) {
    // $news = $user->news->load('category', 'author');
        return view('news', ['title' => count($user->news).' News by '.$user->name, 'newss' => $user->news]);
});
Route::get('/categories/{category:slug}', function (Category $category) {
    // $news = $category->news->load('category', 'author');
        return view('news', ['title' => 'News in : '.$category->name, 'newss' => $category->news]);
});
Route::get('/about', function () {
    return view('about', ['name' => 'Kamaludin Darmawan', 'title' => 'About'] );
});
Route::get('/contact', function () {
    return view('contact',['title' => 'Contact']);
});

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);

Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/dashboard', function(){
    return view('dashboard.index');
})->middleware('auth');

Route::get('/dashboard/news/checkSlug', [DashboardNewsController::class, 'checkSlug'])->middleware('auth');

Route::resource('/dashboard/news', DashboardNewsController::class)->middleware('auth');

Route::resource('/dashboard/users', AdminUserController::class)->except('show')->middleware('admin');
