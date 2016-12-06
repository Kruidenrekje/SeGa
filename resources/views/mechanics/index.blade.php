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
                    Mechanics verwijderen
                </a>

            </div>
        </div>

    <table class="table table-bordered" style="background-color: white" name="Mechanics">
        <tr>
            <th>#</th>
            <th>Naam</th>
            <th>Beschrijving</th>
            <th>Labels</th>
            <th>Opties</th>
        </tr>

        @foreach ($mechanics as $mechanic)
        <tr>
            <td>{{ $mechanic->id }}</td>
            <td>{{ $mechanic->name }}</td>
            <td>{{ $mechanic->description }}</td>
            <td>{{ $mechanic->label }}</td>
            <td>

            <button class="edit-modal-modal btn btn-warning" >
            <span class="glyphicon glyphicon-primary" data-id="{{$mechanic->id}}" data-title="{{$mechanic->name}}" data-description="{{$mechanic->description}}"></span>Bewerk
            </button>

             <button class="delete-modal btn btn-danger">
            <span class="glyphicon glyphicon-trash" data-id="{{$mechanic->id}}" data-title="{{$mechanic->name}}" data-description="{{$mechanic->description}}" aria-hidden="true"></span>Verwijder
            </button>

            </td>
        </tr>
        @endforeach
    </table>
</div>
@endsection
