<?php

namespace App\Http\Controllers;
use Request;
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

  public function store(Request	$request){
	$mechanic= new Mechanic;
	$this->validate($request,
		['name'=>'required|max:255',
		'description'=>'required|max:255',
		'label'=>'required|max:255',]);
	$mechanic->name=$request->name;
	$mechanic->description=$request->description;
	$mechanic->label=$request->label;
	$mechanic->save();
	return redirect('/mechanics');
  }

  public function edit($id){
    $mechanic = Mechanic::findOrFail($id);
    return View('edit-mechanic')
    ->with('mechanic', $mechanic);

  }

  public function update(Request $request, $id){
    $mechanic = Mechanic::findOrFail($id);
    $this->validate($request,
    ['name'=>'required|max:255',
    'description'=>'required|max:255',
    'label'=>'required|max:255',]);
    $mechanic->name = $request->name;
    $mechanic->description=$request->description;
    $mechanic->label=$request->label;
    $mechanic->save();

    return redirect('/mechanics');
    }

  public function __construct() {
       $this->middleware('auth');
   }

  // public function deleteAll(Request $request){
  // 	DB::find($req->id)->delete();
  // 	return response()->json();}
  //


public function destroy($id)
{
    $mechanic = Mechanic::findOrFail($id);

    $mechanic->delete(); //DELETE OCCURS HERE AFTER RECORD FOUND

    return redirect('/mechanics');
}

public function search(Request $request)
{
    $keyword = Request::input('keyword');
    $mechanics = Mechanic::where("name", "LIKE", "%$keyword%")->get();
    

    foreach($mechanics as $mechanic)
    {
    }
    return view('search-results', compact('mechanic', 'keyword'));
}


 }
