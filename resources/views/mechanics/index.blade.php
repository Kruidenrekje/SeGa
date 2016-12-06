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
                    Add mechanic
                </a>

                <a href="{{route('edit-mechanic')}}" class="btn btn-primary">
                    <span class="glyphicon glyphicon" aria-hidden="true"></span>
                    Delete all mechanics
                </a>

            </div>
        </div>

    <table class="table table-bordered" style="background-color: white" name="Mechanics">
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Description</th>
            <th>Labels</th>
            <th>Options</th>
        </tr>

        @foreach ($mechanics as $mechanic)
        <tr>
            <td>{{ $mechanic->id }}</td>
            <td>{{ $mechanic->name }}</td>
            <td>{{ $mechanic->description }}</td>
            <td>{{ $mechanic->label }}</td>
            <td>

            <button class="btn btn-success btn-sm" >
            <span class="glyphicon glyphicon" data-id="{{$mechanic->id}}" data-title="{{$mechanic->name}}" data-description="{{$mechanic->description}}"></span>Add to Project
            </button>

            <button class="btn btn-warning btn-sm" >
            <span class="glyphicon glyphicon" data-id="{{$mechanic->id}}" data-title="{{$mechanic->name}}" data-description="{{$mechanic->description}}"></span>Edit
            </button>

             <button class="btn btn-danger btn-sm">
            <span class="glyphicon glyphicon" data-id="{{$mechanic->id}}" data-title="{{$mechanic->name}}" data-description="{{$mechanic->description}}" aria-hidden="true"></span>Delete
            </button>


            </td>
        </tr>
        @endforeach
    </table>
</div>
@endsection
