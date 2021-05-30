<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
    	$name="Hieu";
    	$age=21;
    	return view('pages.dashboard',[
    	'name'=>$name,
    	'age'=>$age,
    	]);
    }
}
