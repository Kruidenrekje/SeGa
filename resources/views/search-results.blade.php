@extends('layouts.app')
@section('content')
<table class="table table-bordered" style="background-color: white" name="Mechanics">
        <tr>
            <th>Name</th>
            <th>Description</th>
            <th>Labels</th>
            <th>Options</th>
        </tr>

        <tr>
        @foreach($mechanics as $mechanic)
        <tr>   
            <td>{{ $mechanic->name }}</td>
            <td>{{ $mechanic->description }}</td>
            <td>{{ $mechanic->label }}</td>
            <td class="buttons">

              <input type="hidden" name="_method" value="delete">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
              <a href="{{route('add-to-project',$mechanic->id)}}" class="btn btn-primary">Add to Project</a>

              <input type="hidden" name="_method" value="delete">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
              <a href="{{route('edit-mechanic',$mechanic->id)}}" class="btn btn-primary">Edit</a>
              <input type="submit" class="btn btn-danger" onclick="return confirm('Are you sure to delete this data?');" name="name" value="Delete">
            </td>
        </tr>
        @endforeach
    </div>
    </table>

@endsection