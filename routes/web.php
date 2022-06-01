<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\FormsController;





Route::get('/',[HomepageController::class,'index'])->name('index');

Route::get('tarihce',[HomepageController::class,'timeline']);
Route::get('urunler',[HomepageController::class,'allProducts']);
Route::get('urun/{title}/{id}.html',[HomepageController::class,'urun']);
Route::get('hizmetlerimiz',[HomepageController::class,'hizmetlerimiz']);
Route::get('hizmetlerimiz/{title}/{id}',[HomepageController::class,'hizmetlerimizDetay']);

Route::get('referanslar',[HomepageController::class,'referanslar']);
Route::get('referans/{title}/{id}',[HomepageController::class,'referansDetay']);
Route::get('haberler',[HomepageController::class,'haberler']);
Route::get('haberler/{title}/{id}',[HomepageController::class,'haberDetay']);
Route::get('haberler/{category_id}',[HomepageController::class,'haberler']);
Route::get('blog',[HomepageController::class,'blog']);
Route::get('blog/{title}/{id}',[HomepageController::class,'blogDetay']);
Route::get('kalite',[HomepageController::class,'kalite']);
Route::get('misyonumuz',[HomepageController::class,'misyonumuz']);
Route::get('vizyonumuz',[HomepageController::class,'vizyonumuz']);
Route::post('/iletisim',[HomepageController::class,'mailat']);




Route::get('urunler/{title}/{category_id}.html',[HomepageController::class,'products']);

Route::get('{title}/{category_id}.htm',[HomepageController::class,'category']);
Route::get('{title}/{id}.html',[HomepageController::class,'post'])->name('post');
Route::get('{title}/{id}/amp',[HomepageController::class,'post'])->name('post');

Route::get('iletisim',[HomepageController::class,'iletisim'])->name('iletisim');

require __DIR__.'/auth.php';
require __DIR__.'/solaris.php';
