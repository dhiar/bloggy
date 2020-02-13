<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// class of Database
use Illuminate\Support\Facades\DB;

// class id Model
use App\Models\Blog;

class BlogController extends Controller
{
    
    // dhiar 1d.
    public function index() 
    {
        // create done
        // $blog = new Blog;
        // $blog->title = "bekasi";
        // $blog->description = "halo bekasi";
        // $blog->save();

        Blog::create([
            "title" => "madiun",
            "description" => "halo madiun"
        ]);

        // get data from model Blog
        $blogs = Blog::all();
        // return view("blog/home"); // simple
        
        // pass data ke view
        return view("blog/home", ["blogs" => $blogs]);
    }
    
    // dhiar 1e.
    public function show($id)
    {
        // return view("blog/home"); // simple
        
        $text_id = "id user = ".$id;
        $blog =  Blog::find($id);

        // $users_where = DB::table('users')->where('username','like','%a%')->get();

        // insert done
        // DB::table('users')->insert([
        //     ['username' => "andi", 'password'=> "abc"]
        // ]);        

        // update done
        // DB::table('users')->where(['username'=>'andi'])->update(
        //         ['username' => "doni"]
        //     );
        
        // delete
        // DB::table('users')->where('id','>','5')->delete();

        $users = DB::table('users')->get();

        // $js_script = '<script>alert("js script");</script>';

        // pass data ke view
        return view("blog/single", [
            "users"=>$users, 
            "blog" => $blog
        ]
        );
    }

    // contoh fractal
    // composer --> composer require spatie/laravel-fractal
    public function fractal(){
        echo "fractal";
    }
}
