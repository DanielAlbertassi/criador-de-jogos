<?php
use App\Http\Controllers\ControllerApp;
use Illuminate\Support\Facades\Route;

//Route::get('/home/{id?}/{name?}',function($id = null,$name=null){
    //return view('home',['idhome'=>$id,'nomehome'=>$name]);
//})->where(['id','[0-9]+','name'=>'[a-zA-Z]+']);

//Route::get('/home',[ControllerApp::class,'index']);
//Route::get('/', function () { 
//return view('welcome');   
//})->name('home-index');
Route::prefix('home')->group(function(){
    Route::get('/',[ControllerApp::class,'index'])->name('homes-index');
    Route::get('/create',[ControllerApp::class,'create'])->name('homes-create');
    Route::post('/',[ControllerApp::class,'store'])->name('homes-store');
    Route::get('/{id}/edit',[ControllerApp::class,'edit'])->where('id','[0-9]+')->name('homes-edit');
    Route::put('/{id}',[ControllerApp::class,'update'])->where('id','[0-9]+')->name('homes-update');
    Route::delete('/{id}',[ControllerApp::class,'destroy'])->where('id','[0-9]+')->name('homes-destroy');

});

Route::fallback (function(){
    return"Erro";
    });