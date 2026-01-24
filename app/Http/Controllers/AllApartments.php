<?php

namespace App\Http\Controllers;

use App\Models\Apartment;
use Illuminate\Http\Request;

class AllApartments extends Controller
{


    public function index()
    {

        $apartments = Apartment::with(['images', 'university'])->paginate(4);





        return view('apartments', compact('apartments'));

    }


    public function show(Apartment $apartment)
    {


        $apartment->load(['images', 'university', 'owner', 'features']);

        

        return view('apartment-details', compact('apartment'));
    }





}
