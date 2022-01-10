<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OffersController extends Controller
{
      public function index()
    {
        return view('offers.index');
    }  
      public function show()
    {
        return view('offers.show');
    } 
        public function create()
    {
        // load the create form (app/views/sharks/create.blade.php)
        return view('offers.create');
    } 
      
}
