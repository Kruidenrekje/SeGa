<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mechanic;
use App\Project;
use App\ProjectFile;
use App\User;

class ProjectsController extends Controller
{
  public function __construct() {
       $this->middleware('auth');
   }

  public function index(){

        return view('projects.index');
  }

      public function create(){
        $mechanics = Mechanic::all();
        return view('projects.new', compact('mechanics'));
    }


    public function store(Request $request)
    {

        $project = Project::create([
            'user_id' => 1,
            'status' => 0,
        ]);

        $projectfile = New ProjectFile([
            'mechanic_id' => $request->mechanic,
        ]);

        $project->projectfiles()->save($projectfile);

        $user = User::first();
        return "success";
    }
}
