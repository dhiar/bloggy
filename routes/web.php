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
    $user = \App\User::first();
    
    // fungsi attach
    // fungsi : menambahkan data pada tbl role, sejumlah 2 data pada tbl role_user
    /*
    $roles = \App\Role::all();
    $user->roles()->attach($roles); // gunanya untuk apa?
    */    

    // fungsi detach
    // fungsi : delete data. pada case ini, delete data pada row pertama tbl role_user
    /*
    $roles = \App\Role::first();
    $user->roles()->detach($roles);
    */
    
    // tambahkan 1 data
    /*
    $roles = \App\Role::first();
    $user->roles()->attach($roles); 
    */    

    // $user->roles()->attach([1, 3, 5]); 
    // result : di tbl : role_user, field `role_user` ada tambahan : 1,3,5

    // delete or insert on tbl role_user. dis-appear some id (yang tidak di-dalam param array) in result
    // $user->roles()->sync([1, 3, 5]); // otomatis delete data

    // $user->roles()->sync([2, 4]); // otomatis nambah data

    // $user->roles()->syncWithOutDetaching([3]); // hanya nambah 1 data tanpa ada delete data

    //$role = \App\Role::find(4);
    // $role->users()->sync([5])
    
    // dd($roles);
    /*
        factory(\App\User::class)->create(); 
        // create 1 data fake

       
    */    
    return view('welcome');
});

// dhiar 1a.
//Route::get('/koding', function (){
//    return view("blog/home");
//});

// dhiar 1c. Mengakses controller@function
Route::get('/blog', "BlogController@index");

// dhiar 1e.
Route::get('/blog/{id}', "BlogController@show");

Route::get('/home', "HomeController@index");
Route::get('/home/pivot', "HomeController@pivot");

Route::get('/article', "ArticleController@index");
Route::get('/article/create', "ArticleController@create");
Route::get('/article/show', "ArticleController@show");
Route::get('/article/onetomany', "ArticleController@onetomany");

// Route::get('/profile/{username}', "ArticleController@profile");
Route::get('/profile/{username}', function ($username) {
    // echo 'username='.$username.'<br>';
    $user = User::whereName($username)->first();
    dd($user);
});

Route::get('/analytic', "AnalyticController@index");

// Route::get('/analyticreport', "AnalyticReportController@index");
Route::get('/analyticreport', "AnalyticReportController@show");

Route::get('/customers', "CustomersController@index");
Route::get('/customers/list', "CustomersController@list");
Route::get('/customers/store', "CustomersController@store");

