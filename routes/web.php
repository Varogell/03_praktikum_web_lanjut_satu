<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\PageController;
// use App\Http\Controllers\AboutController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\ContactUsController;

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

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/', function () {
//     echo "Selamat Datang";
//     });
// Route::get('/about', function (){
//     echo "NIM : 2141720237";
//     echo " Nama : Alvaro Hegel Ivanka";
// });
// Route::get('/articles/{id}', function ($id){
//     echo "Halaman artikel dengan id $id";
// });
// Route::get('/',[HomeController::class,'index']);
// Route::get('/about',[AboutController::class, 'about']);
// Route::get('/articles/{id}',[ArticleController::class, 'articles']);
route::get('/', [HomeController::class,'home']);

//product
route::prefix('product')->group(function(){
    route::get('/', [productcontroller::class, 'home']);
    route::get('/1', function(){
        return redirect("https://www.educastudio.com/category/marbel-edu-games");
    });
    route::get('/2', function(){
        return redirect("https://www.educastudio.com/category/marbel-and-friends-kids-games");
    });
    route::get('/3', function(){
        return redirect("https://www.educastudio.com/category/riri-story-books");
    });
    route::get('/4', function(){
        return redirect("https://www.educastudio.com/category/kolak-kids-songs");
    });

});
//program 
route::prefix('program')->group(function(){
    route::get('/', [ProgramController::class, 'home']);
    route::get('/karir', function(){
        return redirect("https://www.educastudio.com/program/karir");
    });
    route::get('/magang', function(){
        return redirect("https://www.educastudio.com/program/magang");
    });
    route::get('/kunjungan', function(){
        return redirect("https://www.educastudio.com/program/kunjungan-industri");
    });
});
//news
route::get('/news', [NewsController::class, 'home']);
route::get('/news/{id}',function ($id){
    if ($id == 1){
        return redirect("https://www.educastudio.com/news");
    } else if ($id == 2){
        return redirect("https://www.educastudio.com/news/educa-studio-berbagi-untuk-warga-sekitar-terdampak-covid-19");
    }
});

//Contact us
Route::get('/contact-us', function(){
    return redirect("https://www.educastudio.com/contact-us");
});
Route::get('/contact', [ContactUsController::class, 'home']);

//About Us
Route::get('/about-us', function(){
    return redirect("https://www.educastudio.com/about-us");
});
Route::get('/about', [AboutUsController::class, 'home']);