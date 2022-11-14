<?php

namespace App\Http\Controllers;

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
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
     
    public function show(){


        return view ('show');
    } 

    public function edit(){

        return view ('edit');
    }

    public function store(request $request){

        

        return view ('edit');
    }

    public function update(){

            Auth::user()->update($request->all());

        return redirect('/home/update')->with('msg','Dados Salvos com sucesso');
    }
}
