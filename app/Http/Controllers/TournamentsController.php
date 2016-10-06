<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class TournamentsController extends Controller
{
    public function listTournaments()
    {
    	return view('tournaments/list');
    }
}
