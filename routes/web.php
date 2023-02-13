<?php

use App\Http\Controllers\FishingBoatController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\NewsandFeedsController;
use App\Http\Controllers\OtherProductsController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PassengerBoatController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\TendersandVacanciesController;
use App\Models\FishingBoat;
use App\Models\TendersandVacancies;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;



// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/',[PageController::class, 'index'])->name('home');
Route::get('/{id}/viewmore_fb', [PageController::class, 'viewmore_fb'])->name('viewmore_fb');
Route::get('/{id}/viewmore_pb', [PageController::class, 'viewmore_pb'])->name('viewmore_pb');
Route::get('/{id}/viewmore_op', [PageController::class, 'viewmore_op'])->name('viewmore_op');
Route::get('/about',[PageController::class, 'aboutus'])->name('about');
Route::get('product/fishingboats',[PageController::class, 'fishingboat'])->name('product.fishingboats');
Route::get('product/passengerboats',[PageController::class,'passengerboat'])->name('product.passengerboats');
Route::get('product/otherproducts',[PageController::class,'otherproduct'])->name('product.otherproducts');
Route::get('news-feeds',[PageController::class,'newsfeed'])->name('newsfeeds');
Route::get('tenders-vacancies',[PageController::class,'tender'])->name('tendersvacancies');
Route::get('contactus',[PageController::class,'contact'])->name('contactus');
Route::get('ourprojects',[PageController::class,'project'])->name('ourprojects');
Route::get('all_gallery', [PageController::class, 'gallery'])->name('all.gallery');






Auth::routes(['register'=>false,'password.reset' => false, 'reset' => false]);

// Route::group(['middleware' => 'auth'], function () {
    
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index']);

//gallery routes

Route::get('admin/gallery',[GalleryController::class, 'index'])->name('gallery');
Route::post('admin/gallery',[GalleryController::class, 'store']);
Route::get('fetch-gallery', [GalleryController::class, 'fetchboat']);
Route::get('edit-gallery/{id}', [GalleryController::class, 'edit']);
Route::post('update-gallery/{id}', [GalleryController::class, 'update']);
Route::delete('delete-gallery/{id}', [GalleryController::class, 'destory']);

//gallery projects

Route::get('admin/projects',[ProjectController::class, 'index'])->name('projects');
Route::post('admin/projects',[ProjectController::class, 'store']);
Route::get('fetch-projects', [ProjectController::class, 'fetchData']);
Route::get('edit-projects/{id}', [ProjectController::class, 'edit']);
Route::post('update-projects/{id}', [ProjectController::class, 'update']);
Route::delete('delete-projects/{id}', [ProjectController::class, 'destory']);



//fishing boat routes

Route::get('admin/fishingboats',[FishingBoatController::class, 'index'])->name('fishingboats');
Route::post('admin/fishingboats',[FishingBoatController::class, 'store']);
Route::get('fetch-fishingboats', [FishingBoatController::class, 'fetchboat']);
Route::get('edit-fishingboats/{id}', [FishingBoatController::class, 'edit']);
Route::post('update-fishingboats/{id}', [FishingBoatController::class, 'update']);
Route::delete('delete-fishingboats/{id}', [FishingBoatController::class, 'destory']);


// passenger boat routes

Route::get('admin/passengerboats',[PassengerBoatController::class, 'index'])->name('passengerboats');
Route::post('admin/passengerboats',[PassengerBoatController::class, 'store']);
Route::get('fetch-passengerboats', [PassengerBoatController::class, 'fetchboat']);
Route::get('edit-passengerboats/{id}', [PassengerBoatController::class, 'edit']);
Route::post('update-passengerboats/{id}', [PassengerBoatController::class, 'update']);
Route::delete('delete-passengerboats/{id}', [PassengerBoatController::class, 'destory']);


// other product routes

Route::get('admin/otherproducts',[OtherProductsController::class, 'index'])->name('otherproducts');
Route::post('admin/otherproducts',[OtherProductsController::class, 'store']);
Route::get('fetch-otherproducts', [OtherProductsController::class, 'fetchData']);
Route::get('edit-otherproducts/{id}', [OtherProductsController::class, 'edit']);
Route::post('update-otherproducts/{id}', [OtherProductsController::class, 'update']);
Route::delete('delete-otherproducts/{id}', [OtherProductsController::class, 'destory']);



// news and feeds routes

Route::get('admin/news-feeds',[NewsandFeedsController::class, 'index'])->name('news&feeds');
Route::post('admin/news-feeds',[NewsandFeedsController::class, 'store']);
Route::get('fetch-news-feeds', [NewsandFeedsController::class, 'fetchData']);
Route::get('edit-news-feeds/{id}', [NewsandFeedsController::class, 'edit']);
Route::post('update-news-feeds/{id}', [NewsandFeedsController::class, 'update']);
Route::delete('delete-news-feeds/{id}', [NewsandFeedsController::class, 'destory']);


// tenders routes

Route::get('admin/tenders-vacancies',[TendersandVacanciesController::class, 'index'])->name('tenders-vacancies');
Route::post('admin/tenders-vacancies',[TendersandVacanciesController::class, 'store']);
Route::get('fetch-tenders-vacancies', [TendersandVacanciesController::class, 'fetchData']);
Route::get('edit-tenders-vacancies/{id}', [TendersandVacanciesController::class, 'edit']);
Route::post('update-tenders-vacancies/{id}', [TendersandVacanciesController::class, 'update']);
Route::delete('delete-tenders-vacancies/{id}', [TendersandVacanciesController::class, 'destory']);





// });


