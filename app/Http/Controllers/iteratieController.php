<?php

namespace App\Http\Controllers\Auth;

use App\Http\requests;
use Illuminate\http\request;
use DB;

class iteratieController extends Controller
{
	public function lijst()
	{
		$planning = DB::table('planning')->get();
		return view ('home')->with('planningposts', $planning);
	}
}
