<?php
use Illuminate\Support\Facades\App;
use App\Role;
use App\User;
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

// dhiar 1a. jika mengakses root, maka akan menampilkan view Welcome (resources/views/welcome.blade.php)
// blade adalah sistem template

// dhiar-tutorial eager-loading : Laravel 5.8 Tutorial From Scratch - e47 - Eloquent Relationships Many To Many (BelongsToMany)
Route::get('/', function () 
{
    return view('welcome');
});

Route::get('/blog', "BlogController@index");

Route::get('/blog/{id}', "BlogController@show");

Route::get('/home', "HomeController@index");
Route::get('/home/store-user', "HomeController@storeUser");
Route::get('/home/store-user-factory', "HomeController@storeUserFactory");
Route::get('/home/store-role', "HomeController@storeRole");
Route::get('/home/store-country', "HomeController@storeCountry");

Route::get('/home/pivot', "HomeController@pivot");

Route::get('/article', "ArticleController@index");
Route::get('/article/store', "ArticleController@store");
Route::get('/article/show', "ArticleController@show");
Route::get('/article/show-by-user/{username}', "ArticleController@showByUser");
Route::get('/article/onetomany', "ArticleController@onetomany");

Route::get('/user/{username}', function ($username) {
    $user = User::whereName($username)->first()->toArray();
    dd($user);
});

Route::get('/user-all', function () {
    $user = User::all()->toArray();
    dd($user);
});

Route::get('/user-attach', "HomeController@attach");
Route::get('/user-detach', "HomeController@detach");
Route::get('/user-sync', "HomeController@sync");
Route::get('/user-sync-wo-detach', "HomeController@sync");
Route::get('/user-address', "HomeController@userAddress");
Route::get('/user-articles', "HomeController@userArticles");

Route::get('/analytic', "AnalyticController@index");

Route::get('/analyticreport', "AnalyticReportController@show");

Route::get('/customers', "CustomersController@index");
Route::get('/customers/list', "CustomersController@list");
Route::get('/customers/store', "CustomersController@store");

Route::get('/country', "CountryController@index");

Route::get('/morph/user', "HomeController@morphUser");

