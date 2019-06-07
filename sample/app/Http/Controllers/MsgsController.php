<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MsgsController extends Controller
{
  public function add()
  	{
        return view('msg/add');
    }

      public function index()
  	{
        return view('msg/index');
    }



}
