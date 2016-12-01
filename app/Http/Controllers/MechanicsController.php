<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Mechanic;


class MechanicsController extends Controller
{
    public function index(){
    	$mechanics = Mechanic::all();

    	return view('mechanics.index', compact('mechanics'));
    }

    public function create(){
    	return view('mechanics.new');    
}

	public function edit(){

		return view('mechanics.edit', compact('edit'));

	}
public function store(Request	$request)
{
	$mechanic= new Mechanic;
	$this->validate($request,
		['name'=>'required|max:255',
		'price'=>'required',
		'description'=>'max:255',
		'status'=>'required',]);
	$mechanic->name=$request->name;
	$mechanic->price=$request->price;
	$mechanic->status=$request->status;
	$mechanic->description=$request->description;
	$mechanic->save();
	return redirect('/mechanics');}

public function delete(){

}
 
public function __construct() {
     $this->middleware('auth');
 }



}