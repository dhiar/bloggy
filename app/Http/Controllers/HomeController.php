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

    public function pivot()
    {
        // attach for insert
        // detach for delete
        // sync for insert if not exist

        $user = User::find("1");
        // $user->roles()->attach([1,2,3],['name'=>'Test Name']);

        // $user->roles()->attach(2);
        // $user->roles()->detach([1,2,3]);
        // $user->roles()->sync([1,2,3]);

        foreach ($user->roles as $role) {
            echo $role->name.'__createdAt='.$role->pivot->name.'<br>';
            // echo $role->name.'__createdAt='.$role->pivot->created_at.'<br>';
        }

        dd($user->roles);

    }
}
