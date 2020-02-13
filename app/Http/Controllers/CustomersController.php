<?php

namespace App\Http\Controllers;

use App\Customer;
use Illuminate\Http\Request;

class CustomersController extends Controller
{
    public function index()
    {
        echo "index of customer";
    }

    public function list()
    {
        $activeCustomer = Customer::active()->get()->toArray();
        echo 'activeCustomer=';
        dump($activeCustomer);

        $inactiveCustomer = Customer::inactive()->get()->toArray();
        echo 'inactiveCustomer=';
        dump($inactiveCustomer);

        $customers =  Customer::all()->toArray();


        echo 'customer=';
        dump($customers);

        exit();
        
        return view('internals.customers', [
            'customers' => $customers
        ]);
    }

    public function store()
    {        
        Customer::create([
            'name' => 'andi',
            'email' => 'andi@y.com',
            'active' => '1'
        ]);
    }
}
