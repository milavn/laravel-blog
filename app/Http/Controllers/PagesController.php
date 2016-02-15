<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    //
	public function about() {

		//$data ="<script>alert(7777)</script>test";
		$people=[];
		/*$people = [
				"Taylor", "Jim", "Ann"

			];*/
		return view('pages/about', compact('people'));
		//return view('pages/about')->with('data', $data);
	}


}
