<?php

namespace App\Http\Controllers;
use Request;
use App\Mechanic;


class SearchController extends Controller
{
	//Deze functie vraagt een keyword uit het tekstvak en geeft een view terug op basis van het keyword
	public function search(Request $request)
	{
	    $keyword = Request::input('keyword');
	    $mechanics = Mechanic::where("name", "LIKE", "%$keyword%")->get();


	    foreach($mechanics as $mechanic)
	    {
	    }
	    return view('search-results', ['mechanics' => $mechanics]);
	}
}