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
    <table class="table table-bordered" style="background-color: white">
        <tr>
            <th>#</th>
            <th>Naam</th>
            <th>Beschrijving</th>
            <th>Prijs</th>
            <th>Vooraad</th>
        </tr>
        @foreach ($mechanics as $mechanic)
        <tr>
            <td>{{ $mechanic->id }}</td>
            <td>{{ $mechanic->name }}</td>
            <td>{{ $mechanic->description }}</td>
            <td>{{ $mechanic->price }} </td>
            <td>
                @if($mechanic->status == 0)
                <span>Offline</span>
                @else
                <span>Online</span>
                @endif
            <td>
        </tr>
        @endforeach
    </table>
</div>
@endsection