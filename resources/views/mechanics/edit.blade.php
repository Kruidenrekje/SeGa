@extends('layouts.app')
@section('content')

<title> Inhoud van tabel is verwijderd </title>
<div class="container">
    <h1>Inhoud van tabel is verwijderd </h1>
    <div class="panel panel-default">
        <div class="panel-heading">
              Menu
        </div>

        <div class="panel-body">
              Klik hier om terug te gaan
              <input type=button onclick="window.location='{{route("mechanics")}}'" value='terug'>
<?php
DB::table('mechanics')-> delete();
 ?>
@endsection
