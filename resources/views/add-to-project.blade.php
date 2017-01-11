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
            <td>{{ $mechanic->name }}</td>
            <td>{{ $mechanic->description }}</td>
            <td>{{ $mechanic->label }}</td>
            </td>
        </tr>
    </table>

    <h4>Add to which project?</h4>
    <form method="post">
      <div class="form-group">
          <label for="name">Name</label>
          <input type="text" name="name" id="name" class="form-control" placeholder="Enter name of the mechanic"/>
      </div>
      </form>
      {{ csrf_field() }}
      <input type="submit" name="submit" class="btn btn-primary" value="Create">

      </div>


@endsection
