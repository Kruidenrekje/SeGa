@extends('layouts.app')
@section('content')
<title>Edit Mechanic</title>
<div class="container">
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
              <a href="{{route('add-to-project',$mechanic->id)}}" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></a>

              <input type="hidden" name="_method" value="delete">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
              <a href="{{route('edit-mechanic',$mechanic->id)}}" class="btn btn-primary"><span class="glyphicon glyphicon-pencil"></a>
              <a href="" type="submit" class="btn btn-danger" onclick="return confirm('Are you sure to delete this data?');"><span class="glyphicon glyphicon-trash"></a>
            </td>
        </tr>
        @endforeach
    </div>
    </table>
</div>

@endsection