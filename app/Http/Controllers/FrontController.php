<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
 use App\Matche;

class FrontController extends Controller
{
    public function index()
    {
    	$matches=Matche::all();
    	return view('Front.index',['matches'=>$matches]);
    }
}
