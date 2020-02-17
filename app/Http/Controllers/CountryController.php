<?php

namespace App\Http\Controllers;

use App\Country;
use Illuminate\Http\Request;

class CountryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $country = Country::findOrFail(2);
        echo 'Name = '.$country->name;
        dump($country->article->toArray());

        $country = Country::find(3);
        echo '<br>Name = '.$country->name;
        dd($country->article->toArray());
    }
}
