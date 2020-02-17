<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Role;
use App\User;
use Illuminate\Support\Facades\Log;

class HomeController extends Controller
{
    public function index(){
        // echo "aaa";
        // exit();
        // curl
        Log::error('kind: login/logout/unauthorized/etc',['subdomain: crm.digitalone.co.id/etc', 'subdomain: crm.digitalone.co.id/etc']);
        // Log::info('- kind: login/logout/unauthorized/etc
        // - subdomain: crm.digitalone.co.id/etc
        // - user_ip: 192.11.121.11
        // - user_browser: Mozilla/MC
        // - user_cookie: acs72w21asdadi189721
        // - additional_logs: text');
        echo 'index homeController';
    }

    public function storeUser(){
        // insert done
        User::insert([
            [
                'name' => "andi", 
                'password'=> "abc",
                'email' => 'abc@y.com',
                'created_at' => now()
            ],
            [
                'name' => "ana", 
                'password'=> "dev",
                'email' => 'dev@y.com',
                'created_at' => now()
            ],
            [
                'name' => "budi", 
                'password'=> "ghi",
                'email' => 'ghi@y.com',
                'created_at' => now()
            ]
        ]);

        dd(User::all()->toArray());
        echo response()->json(['success' => true]);
    }

    public function storeUserFactory(){
        factory(\App\User::class)->create();
        dd(User::all()->toArray());
    }

    public function storeRole(){
        Role::insert([
            [
                'name' => "Admin"
            ],
            [
                'name' => "Developer"
            ],
            [
                'name' => "Manager"
            ],
            [
                'name' => "Staff"
            ],
            [
                'name' => "Office Boy"
            ]
        ]);
        echo response()->json(['success' => true]);
    }

    public function attach()
    {
        $user = User::first();
        $user->roles()->attach(1,['name'=>'Test Name']);

        echo 'Username = '.$user->name.'<br><br>';
        foreach ($user->roles as $role) {
            echo 'roleName='.$role->name.'__createdAt='.$role->pivot->created_at.'<br>';
        }
    }


    public function detach()
    {
        $user = User::first();
        $user->roles()->detach(1);

        echo 'Username = '.$user->name.'<br><br>';
        foreach ($user->roles as $role) {
            echo 'roleName='.$role->name.'__createdAt='.$role->pivot->created_at.'<br>';
        }
    }

    public function sync()
    {
        $user = User::first();
        $user->roles()->sync( [1, ['name'=>'Test Name']]);

        echo 'Username = '.$user->name.'<br><br>';
        foreach ($user->roles as $role) {
            echo 'roleName='.$role->name.'__createdAt='.$role->pivot->created_at.'<br>';
        }
    }

    public function syncWithOutDetaching()
    {
        $user = User::first();
        $user->roles()->syncWithOutDetaching( [1, ['name'=>'Test Name']]);

        echo 'Username = '.$user->name.'<br><br>';
        foreach ($user->roles as $role) {
            echo 'roleName='.$role->name.'__createdAt='.$role->pivot->created_at.'<br>';
        }
    }

    public function pivot()
    {
        $user = User::first();
        foreach ($user->roles as $role) {
            echo $role->name.'__createdAt='.$role->pivot->name.'__'.$role->pivot->created_at.'<br>';
        }

        dd($user->roles);
    }

    public function userAddress(){
        $user = User::first();
        echo 'Username = '.$user->name;
        dd($user->address->country);
    }

    public function userArticles(){
        $user = User::first();
        echo 'Username = '.$user->name;
        // dd($user->address->country);
        dd($user->articles->toArray());
    }
}
