<?php

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

/*Route::get('/', function() {
    return view('template');
});*/
Route::get('/', function() {
    return view('index');
}); 
Route::get('product', function() {
    return view('product.cpu-product');
});
/*
Route::get('/', function () {
	$name   = 'TungTK';
	$age    = 30;
	$addres = 'Hà Nội';

    return view('template', [
		'name'   => $name,
		'age'    => $age,
		'addres' => $addres
    ]);
});

Route::get('info', function () {
    return redirect(route('admin')); // chuyển hướng
})->name('info');

Route::get('contact/info', function(){
	return 'Trang liện hệ thông tin';
});

Route::post('submit', function(){
	return 'Submit dữ liệu!';
});

Route::match(['POST', 'GET'], 'users', function(){
	echo "Route match";
});

// 8.*: Route::resource('news', [NewsController::class, 'index']);
Route::resource('news', 'NewsController');


// Route group

Route::group(['prefix' => 'admin'], function(){
	Route::get('/', function() {
	    return 'Admin';
	})->name('admin');

	Route::get('dashboard', function() {
	    return 'dashboard';
	})->name('admin.dashboard');

	Route::get('member', function() {
	    return 'member';
	})->name('admin.member');
});

Route::get('sum/{number1}/{number2}', function($number1, $number2) {
    $sum = $number1 + $number2;
    echo $sum;
});

Route::get('name/{name}', function($name) {
    echo "Xin chao: ".$name;
})->where(['name' => '[a-zA-Z]+']);

Route::get('/',function(){
	return 'day la trang thong bao';
});
Route::group(['prefix'=>'admin','namespace'=>'Admin'],function(){

	Route::get('/',function(){
		return view('layout.default');
	})->name('admin');
	Route::get('dashboard',function(){
		return view('pages.dashboard');
	})->name('admin.dashboard');

	Route::get('/','DashboardController@index')->name('dashboard.index');
	
	});*/