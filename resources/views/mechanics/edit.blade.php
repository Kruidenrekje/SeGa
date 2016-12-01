@extends('layouts.app')
@section('content')

<title> Game Mechanics </title>
<div class="container">
    <h1>Game Mechanics</h1>
    <div class="panel panel-default">
        <div class="panel-heading">Menu</div>
            <div class="panel-body">

                <a href="{{route('create-mechanic')}}" class="btn btn-primary">
                    <span class="glyphicon glyphicon" aria-hidden="true"></span> 
                    Mechanic toevoegen
                </a>
                <a href="{{route('edit-mechanic')}}" class="btn btn-primary">
                    <span class="glyphicon glyphicon" aria-hidden="true"></span> 
                    Mechanic wijzigen
                </a>
  
            </div>
         </div>
    </div>



@endsection