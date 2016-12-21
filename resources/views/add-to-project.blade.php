@extends('layouts.app')
@section('content')

<div class="container">
<title>Add to Project</title>
  <h1>Add to Project</h1>
  <h4>You chose the mechanic:</h4>
<table class="table table-bordered" style="background-color: white" name="Mechanics">
        <tr>
            <th>Name</th>
            <th>Description</th>
            <th>Labels</th>
        </tr>

        <tr>
        <tr>   
            <td>{{ $mechanic->name }}</td>
            <td>{{ $mechanic->description }}</td>
            <td>{{ $mechanic->label }}</td>
            </td>
        </tr>
    </table>

    <h4>Add to which project?</h4>
    <?php
    $users = App\User::where('active', 1)->get();

    foreach ($users as $user) 
    {
      echo $user->name;
    }
?>
      </div>

@endsection