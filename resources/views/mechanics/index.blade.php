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
                    Add mechanic
                </a>
              </div>
            </div>
        </div>

        <ul class="nav navbar-nav navbar-right">
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Sort by <span class="caret"></span></a>
            <ul class="dropdown-menu">
           <li><a href="#">Name</a></li>
           <li><a href="#">Labels</a></li>
         </ul>
       </li>
     </ul>
    </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
    </nav>

    <table class="table table-bordered" style="background-color: white" name="Mechanics">
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Description</th>
            <th>Labels</th>
            <th>Options</th>
        </tr>

        @foreach ($mechanics as $mechanic)
        <tr>
            <td>{{ $mechanic->id }}</td>
            <td>{{ $mechanic->name }}</td>
            <td>{{ $mechanic->description }}</td>
            <td>{{ $mechanic->label }}</td>
            <td>

            <button class="btn btn-success btn-sm" >
            <span class="glyphicon glyphicon" data-id="{{$mechanic->id}}" data-title="{{$mechanic->name}}" data-description="{{$mechanic->description}}"></span>Add to Project
            </button>

            <button class="btn btn-warning btn-sm" >
            <span class="glyphicon glyphicon" data-id="{{$mechanic->id}}" data-title="{{$mechanic->name}}" data-description="{{$mechanic->description}}"></span>Edit
            </button>

            {!! Form::open(['method'=>'DELETE', 'route'=>['destroy-mechanic',$mechanic->id]]) !!}
            <button class="btn btn-danger btn-sm">
            <span class="glyphicon glyphicon" data-id="{{$mechanic->id}}" data-title="{{$mechanic->name}}" data-description="{{$mechanic->description}}" aria-hidden="true"></span>Delete
            </button>
            {!! Form::close() !!}


            </td>
        </tr>
        @endforeach
    </table>
</div>
@endsection
