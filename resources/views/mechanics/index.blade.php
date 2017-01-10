@extends('layouts.app')
@section('content')

<title> Game mechanics </title>
<div class="container">
    <h1>Game mechanics</h1>
    <div class="panel panel-default">
        <div class="panel-heading">Menu</div>
            <div class="panel-body">


                <a href="{{route('create-mechanic')}}" class="btn btn-primary">
                    <span class="glyphicon glyphicon" aria-hidden="true"></span>
                    Add mechanic
                </a>
              </div>
            </div>
        </div>

    </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
    </nav>
    <div class="col-md-8 col-md-offset-2">
    <table class="table table-bordered" style="background-color: white" name="Mechanics">
        <tr>
            <th>Name</th>
            <th>Description</th>
            <th>Labels</th>
            <th>Options</th>
        </tr>

        @foreach ($mechanics as $mechanic)
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
              <a href="{{route('edit-mechanic',$mechanic->id)}}" class="btn btn-secondary"><span class="glyphicon glyphicon-pencil"></a>

              <input type="hidden" name="_method" value="destroy">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
              <a href="{{route('destroy-mechanic',$mechanic->id)}}" class="btn btn-danger" onclick="return confirm('Are you sure to delete this data?')"><span class="glyphicon glyphicon-trash"></a>

            </td>
        </tr>
    </div>
        @endforeach
            <ul class="dropdown pull-right">
            <li>
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Sort by <span class="caret"></span></a>
                <ul class="dropdown-menu">
                <li><a href="#">Name</a></li>
                <li><a href="#">Labels</a></li>
            </li>
          </ul>
    </table>
</div>
@endsection
