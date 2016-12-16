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
    </div>
        @endforeach
          <ul class="nav navbar-nav pull-right">
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Sort by <span class="caret"></span></a>
            <ul class="dropdown-menu">
           <li><a href="#">Name</a></li>
           <li><a href="#">Labels</a></li>
         </ul>
       </li>
     </ul>
    </table>
</div>
@endsection
