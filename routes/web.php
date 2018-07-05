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
Route::get('/', function () {
    return view('front/layout/welcome');
});

// Authentication Routes...
Route::get('login',                       'Auth\LoginController@showLoginForm')                   ->name('login');
Route::post('login',                      'Auth\LoginController@login');
Route::get('logout',                      'Auth\LoginController@logout')                          ->name('logout');

// Registration Routes...
Route::get('register',                    'Auth\RegisterController@showRegistrationForm')        ->middleware('admin')->name('register');
Route::post('register',                   'Auth\RegisterController@register')                    ->middleware('admin');

// Password Reset Routes...
Route::get('password/reset',              'Auth\ForgotPasswordController@showLinkRequestForm')   ->name('password.request');
Route::post('password/email',             'Auth\ForgotPasswordController@sendResetLinkEmail')    ->name('password.email');
Route::get('password/reset/{token}',      'Auth\ResetPasswordController@showResetForm')          ->name('password.reset');
Route::post('password/reset',             'Auth\ResetPasswordController@reset');

Route::get('/home', 'HomeController@index')->name('home');


Route::group(['namespace' => 'admin', 'prefix' => 'admin', 'middleware' => ['auth', 'admin']], function(){

  Route::get('/', 'AdminController@index')->name('admin.home');

  Route::get('users/',                            'UserController@index')         ->name("users.index");
  Route::get('users/{user}',                      'UserController@show')          ->name("users.show");
  Route::get('users/{user}/edit',                 'UserController@edit')          ->name("users.edit");
  Route::patch('users/{user}/update',             'UserController@update')        ->name('users.update');
  Route::post('users/{user}/archive',             'UserController@archive')       ->name('users.archive');

  Route::get('orders/',                           'OrderController@index')        ->name("orders.index");
  Route::get('orders/new',                        'OrderController@new')          ->name('orders.new');
  Route::get('orders/{order}',                    'OrderController@show')         ->name("orders.show");
  Route::get('orders/{order}/edit',               'OrderController@edit')         ->name("orders.edit");
  Route::post('orders/create',                    'OrderController@create')       ->name("orders.create");
  Route::patch('orders/{order}/update',           'OrderController@update')       ->name('orders.update');

  Route::get('orderLines/',                       'OrderLinesController@index')   ->name("orderLines.index");
  Route::get('/order/{order}/orderLines/new',     'OrderLinesController@new')     ->name('orderLines.new');
  Route::post('orderLines/create',                'OrderLinesController@create')  ->name("orderLines.create");


  Route::get('restaurant/',                       'RestaurantController@index')   ->name("restaurant.index");
  Route::get('restaurant/new',                    'RestaurantController@new')     ->name('restaurant.new');
  Route::get('restaurant/{restaurant}',           'RestaurantController@show')    ->name("restaurant.show");
  Route::get('restaurant/{restaurant}/edit',      'RestaurantController@edit')    ->name("restaurant.edit");
  Route::post('restaurant/create',                'RestaurantController@create')  ->name("restaurant.create");
  Route::patch('restaurant/{restaurant}/update',  'RestaurantController@update')  ->name('restaurant.update');


  Route::get('menu/',                             'MenuController@index')         ->name("menu.index");
  Route::get('menu/new',                          'MenuController@new')           ->name('menu.new');
  Route::get('menu/{menu}',                       'MenuController@show')          ->name("menu.show");
  Route::get('menu/{menu}/edit',                  'MenuController@edit')          ->name("menu.edit");
  Route::post('menu/create',                      'MenuController@create')        ->name("menu.create");
  Route::patch('menu/{menu}/update',              'MenuController@update')        ->name('menu.update');

  Route::get('menuLines/',                        'MenuLinesController@index')    ->name("menuLines.index");
  Route::get('/menu/{menu}/menuLines/new',        'MenuLinesController@new')      ->name('menuLines.new');
  Route::post('menuLines/create',                 'MenuLinesController@create')   ->name("menuLines.create");
  Route::post('menuLines/{menuLine_id}/delete',   'MenuLinesController@delete')   ->name("menuLines.delete");

  Route::get('meal',                              'MealController@index')         ->name('meal.index');
  Route::get('meal/new',                          'MealController@new')           ->name('meal.new');
  Route::post('meal/create',                      'MealController@create')        ->name('meal.create');
  Route::patch('meal/{meal_id}/update',           'MealController@update')        ->name('meal.update');
  Route::get('meal/{meal_id}',                    'MealController@show')          ->name('meal.show');
  Route::post('meal/{meal_id}/delete',           'MealController@delete')        ->name('meal.delete');


  Route::get('buyhistory',                                                    'BuyHistoryController@index')             ->name('history.index');
  Route::get('buyhistory/new/ingredient/{ingredient_id}',                     'BuyHistoryController@new')               ->name('history.new');
  Route::post('buyhistory/create/ingredient/{ingredient_id}',                 'BuyHistoryController@create')            ->name('history.create');
  Route::get('buyhistory/{buyhistory_id}',                                    'BuyHistoryController@show')              ->name('history.show');

  Route::get('mealIngredients/',                                  'MealIngredientsController@index')    ->name("mealIngredients.index");
  Route::get('/meal/{meal_id}/mealIngredients/new',               'MealIngredientsController@new')      ->name('mealIngredients.new');
  Route::post('mealIngredients/create',                           'MealIngredientsController@create')   ->name("mealIngredients.create");
  Route::post('mealIngredients/{mealIngredients_id}/delete',      'MealIngredientsController@delete')   ->name("mealIngredients.delete");

  Route::get('marketplace',                       'MarketplaceController@index')  ->name('marketplace.index');


  Route::post('menu/{menu_id}/menuLines/{menuLine_id}/meal/{meal_id}/addMeal', 'MenuLinesController@addMeal') ->name("menuLines.addMeal");


  Route::get('datatables/getMenuMeals/{menu_id}', 'DataLoadingsController@getMenuMeals')  ->name("dataLoadings.menuMeals");
  Route::get('datatables/getUsers', 'DataLoadingsController@getUsers')   ->name("dataLoadings.users");
  Route::get('datatables/getProviders', 'DataLoadingsController@getProviders')   ->name("dataLoadings.providers");
  Route::get('datatables/getIngredients', 'DataLoadingsController@getIngredients') ->name('dataLoadings.ingredients');
  Route::get('datatables/getHistory', 'DataLoadingsController@getHistory') ->name('dataLoadings.history');
  Route::get('datatables/getMeals', 'DataLoadingsController@getMeals') ->name('dataLoadings.meals');


  Route::get('datatables/getReservations', 'DataLoadingsController@getReservations') ->name('dataLoadings.reservations');

});

Route::get('provider/{provider_id}', 'ProviderController@show') ->name('provider.show');
Route::get('provider/{provider_id}/ingredient/new', 'ProviderController@new') ->name('provider.new');
Route::post('provider/{provider_id}/ingredient/create', 'ProviderController@create') ->name('provider.create');
Route::patch('provider/{provider_id}/ingredient/{ingredient_id}/update', 'ProviderController@update') ->name('provider.update');
Route::get('provider/{provider_id}/ingredient/{ingredient_id}/edit', 'ProviderController@edit') ->name('provider.edit');
Route::get('provider/providerIngredients/{provider_id}', 'ProviderController@providerIngredients')  ->name("provider.providerIngredients");


Route::get('reservation/new',   'ReservationController@new') ->name('reservation.new');
Route::get('reservation/index',   'ReservationController@index') ->name('reservation.index');
Route::post('reservation/create',   'ReservationController@create') ->name('reservation.create');
Route::get('restaurants/', 'FrontController@restaurants')   ->name('front.restaurants');
Route::get('restaurants/{restaurant_id}/menu/{menu_id}', 'FrontController@menu')   ->name('front.restaurant.menu');
