@extends('layouts.app')
@section('content')
<table class="table table-bordered" style="background-color: white" name="Mechanics">
        <tr>
            <th>Name</th>
            <th>Description</th>
            <th>Labels</th>
            <th>Options</th>
        </tr>

        @foreach($mechanics as $mechanic)
        <tr>    
            <td>{{ $mechanic->name }}</td>
            <td>{{ $mechanic->description }}</td>
            <td>{{ $mechanic->label }}</td>
            <td class="buttons">
            <button class="btn btn-success btn-sm" >
            <form class="" action="{{route('destroy-mechanic',$mechanic->id)}}" method="post">
            <span class="glyphicon glyphicon" data-id="{{$mechanic->id}}" data-title="{{$mechanic->name}}" data-description="{{$mechanic->description}}"></span>Add to Project
            </button>
              <input type="hidden" name="_method" value="delete">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
              <a href="{{route('edit-mechanic',$mechanic->id)}}" class="btn btn-primary">Edit</a>
              <input type="submit" class="btn btn-danger" onclick="return confirm('Are you sure to delete this data?');" name="name" value="Delete">
            </form>
            </td>
        </tr>
        @endforeach
    </div>
    </table>

@endsection