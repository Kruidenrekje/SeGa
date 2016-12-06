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
            <th>Prijs in €</th>
            <th>Vooraad</th>
            <th>Opties</th>
        </tr>


        @foreach ($mechanics as $mechanic)
        <tr>
            <td>{{ $mechanic->id }}</td>
            <td>{{ $mechanic->name }}</td>
            <td>{{ $mechanic->description }}</td>
            <td>{{ $mechanic->price }} </td>
            <td>
                @if($mechanic->status == 0)
                <span>Nee</span>
                @else
                <span>Ja</span>
                @endif
            <td>

            <button class="edit-modal-modal btn btn-warning" >
            <span class="glyphicon glyphicon-primary"></span>Bewerk
            </button>

             <button class="delete-modal btn btn-danger">
            <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>Verwijder
            </button>

            </td>
        </tr>
        @endforeach
    </table>
</div>
@endsection
