<?php

Route::get('/', function () {
    return view('welcome');
});

/*################ Debug Route #################*/
/* welcomeController*/
//Route::get('hello','Controller@hello');
//Route::get('hello/{name?}','Controller@hello');
// Route::get('hello/{name?}','WelcomeController@hello')
// 	->where(['name'=>'[a-zA-Z]+']);
Route::controller('welcome','WelcomeController'); /* for used getXxx() function*/
/* TestController */
Route::controller('test','TestController'); /* for used getXxx() function*/
Route::resource('test','TestController'); /* for used CRUD*/
/* TestViewControler */
Route::resource('testView','TestViewController');
Route::get('curl','TestViewController@curl');
/*################ END DEBUG ###################*/

//Route::group(['middleware' => 'web'], function () {
	Route::auth();
	Route::get('/home', 'HomeController@index');
//});

Route::group(['prefix' => 'api', 'middleware' => 'auth:api'], function () {
	/* ShopingMall API */
	Route::get('ShopingMall/getMall/{language}/{id?}','ShopingMallController@getMall');
	Route::get('ShopingMall/getNameMall/{language}/{id?}','ShopingMallController@getNameMall');
	Route::get('ShopingMall/getBasePath','ShopingMallController@getBasePath');
	/* Restaurant API */
	Route::get('Restaurant/getRestaurant/{language}/{id?}','RestaurantController@getRestaurant');
	/* Menu API */
	Route::get('Menu/getMenu/{language}/{id}/{imageSize?}','MenuController@getMenu');
	Route::get('Menu/getMenuOption/{language}/{id}','MenuController@getMenuOption');
	Route::get('Menu/getMenuSubOption/{language}/{id}/{imageSize?}','MenuController@getMenuSubOption');
	/* Order */
	Route::get('Order/getOrder/{id}','OrderController@getOrder');
	Route::post('Order/postOrder','OrderController@postOrder');
	/*Example*/
	Route::resource('note','NoteController');
	//Route::get('people2', function() { return App\Test::get();});
	//Route::get('people', function() { return ['a'=>'b'];});
	//Route::post('/short', 'UrlMapperController@store');

});
