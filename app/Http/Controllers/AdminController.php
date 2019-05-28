<?php

namespace App\Http\Controllers;
use App\Training;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function home()
    {
      $training = Training::all();
      // dd($training);
      return view('admin.home',['training'=>$training]);
    }

}
