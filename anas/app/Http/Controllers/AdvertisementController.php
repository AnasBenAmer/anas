<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Complex;


class AdvertisementController extends Controller
{
    public function index()
    {





       $buildings = Complex::with('buildings')->get()->toArray();


  $complexs = Complex::all();

     return view('advertisements.index',['complexs'=>$complexs , 'buildings'=>$buildings]);


    }
}
