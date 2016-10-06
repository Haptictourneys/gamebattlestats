<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class LadderController extends Controller
{
    

	public function listLadders()
	{
		return view('ladders/list');
	}

}
