@extends('layouts.app')
@section('content')

<title>Contents are erased</title>
<div class="container">
    <h1>Contents are erased </h1>
    <div class="panel panel-default">
        <div class="panel-heading">
              Menu
        </div>

        <div class="panel-body">
              Press here to return
              <input type=button onclick="window.location='{{route("mechanics")}}'" value='terug'>
<?php
DB::table('mechanics')-> delete();
 ?>
@endsection
