
<h1>Posts</h1>
{!! Form::open(['action'=>'App\Http\Controllers\PostsController@store','method'=>'POST']) !!}
    <div class="form-group">
        {{Form::label('name','Name')}}
        {{Form::text('name','',['class'=>'form-control','placeholder'=>'Name'])}}
    </div>
{!! Form::close() !!}

    