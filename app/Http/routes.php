<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/



// Route::get('/', function () {
//     return view('home');
// });

Route::get('/', 'FrontController@index');

    
// Authentication Routes...
Route::get('/login', 'Auth\AuthController@getLogin');
Route::post('/login', 'Auth\AuthController@postLogin');
Route::get('/logout', 'Auth\AuthController@getLogout');

// Registration Routes...
Route::get('/register', 'Auth\AuthController@getRegister');
Route::post('/register', 'Auth\AuthController@postRegister');


Route::group(['middleware' => 'web'], function() {

Route::auth();

/***************** CATEGORY ROUTES *******************/

Route::get('client', function() {
    return view('client.index');
});

// Creating categories
Route::get('admin/category/create', 'CategoryController@create');
Route::post('admin/category/create', 'CategoryController@store');


// View
Route::get('admin/categories', 'CategoryController@view');

//Edit
Route::get('admin/category/edit/{category}', 'CategoryController@editForm');
Route::patch('admin/category/{category}', 'CategoryController@edit');

// Delete
Route::delete('admin/category/{category}', 'CategoryController@destroy');


/***************** BRAND ROUTE *******************/

// Creating brands
Route::get('admin/brand/create', 'BrandController@create');
Route::post('admin/brand/create', 'BrandController@store');

//Edit
Route::get('admin/brand/edit/{brand}', 'BrandController@editForm');
Route::patch('admin/brand/{brand}', 'BrandController@edit');


// Delete
Route::delete('admin/brand/{brand}', 'BrandController@destroy');

/***************** PRODUCT ROUTE *******************/
// View
Route::get('admin/products', 'ProductController@view');

// Creating products
Route::get('admin/product/create', 'ProductController@create');
Route::post('admin/product/create', 'ProductController@store');

//Edit
Route::get('admin/product/edit/{product}', 'ProductController@editForm');
Route::patch('admin/product/{product}', 'ProductController@edit');


// Delete
Route::delete('admin/product/{product}', 'ProductController@destroy');


/***************** CUSTOMER ROUTE *******************/

// View
Route::get('admin/customers', 'CustomerController@view');

// Creating customers
Route::get('admin/customer/create', 'CustomerController@create');
Route::post('customer/create', 'CustomerController@store');

//Edit
Route::get('admin/customer/edit/{customer}', 'CustomerController@editForm');
Route::patch('admin/customer/{customer}', 'CustomerController@edit');


// Delete
Route::delete('admin/customer/{customer}', 'CustomerController@destroy');

    
// View
Route::get('admin/brands', 'BrandController@view');


});

Route::get('/admin', 'AdminController@index');


/*************************************************************************************** CLIENT ROUTE ***********************************************************************/

/***************** CATEGORY ROUTE *******************/

// View
Route::get('client/categories', 'CategoryClientController@view');


/***************** BRAND ROUTE *******************/
// View
//Route::get('client/brands', 'BrandClientController@view');
//Route::get('client/brands', );
Route::get('{category}/brands', 'BrandClientController@mobilePhones');

Route::get('/brand/{brandName}', 'BrandClientController@getProducts');

/***************** PRODUCT ROUTE *******************/
// View
Route::get('client/products', 'ProductClientController@view');




//Route::get('/product/{product}', 'ProductClientController@scopeView');

/***************** CUSTOMER ROUTE *******************/

// Creating customers
Route::get('client/customer/create', 'CustomerClientController@create');
Route::post('customer/create', 'CustomerController@store');

//view about us page
Route::get('client/about', 'FrontController@about');


//view detail page
Route::get('client/details', 'FrontController@details');


//view service page
Route::get('client/service', 'FrontController@service');


//registration page
Route::get('client/register', 'ClientCustomer@index');

Route::post('client/register', 'ClientCustomer@register');



//product route
Route::get('/product/{product}','ProductClientController@details');

