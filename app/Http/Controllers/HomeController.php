<?php

namespace App\Http\Controllers;
use App\Training;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index() 
    {
        $training = Training::all();
        return view('home',['training'=>$training]);
        
    }
    public function details($id)
    {
        $training = Training::find($id);
        return view('details',['training' => $training]);
    }
}
