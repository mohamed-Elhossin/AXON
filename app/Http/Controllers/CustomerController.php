<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Customer::paginate(10);

        return view('welcome', compact('data'));
        // $data =    Customer::all();
        // return  view("welcome", compact('data'));
        // $result = preg_match('/^\(237\)\ ?[2368]\d{0,8}$/', '+237');
        // if ($result == false) {
        //     return 'Error occurred while checking the phone number.';
        // } else  if ($result) {
        //     return 'Phone number is valid.';
        // } else {
        //     return 'Phone number is not valid.';
        // }
    }
    public function filter(Request $request)
    {
        $country = $request->input('country');
        $state = $request->input('state');

        $data = Customer::where('country', $country)
            ->where('state', $state)
            ->paginate(10);

        return view('welcome', compact('data'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        Customer::create(
            [
                "country" => "Morocco",
                "state" => "OK",
                "code" => "+212",
                "phone" => "5201223456"
            ],
        );
        Customer::create(
            [
                "country" => "Mozambique",
                "state" => "OK",
                "code" => "+258",
                "phone" => "21123456"
            ],
        );
        Customer::create(
            [
                "country" => "Nigeria",
                "state" => "OK",
                "code" => "+234",
                "phone" => "66307367"
            ],
        );
        Customer::create(
            [
                "country" => "Nigeria",
                "state" => "OK",
                "code" => "+234",
                "phone" => "25100505"
            ],
        );
        Customer::create(
            [
                "country" => "Nigeria",
                "state" => "NOK",
                "code" => "+234",
                "phone" => "9284653698"
            ],
        );

        return "Save data";
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function show(Customer $customer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function edit(Customer $customer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Customer $customer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Customer $customer)
    {
        //
    }
}
