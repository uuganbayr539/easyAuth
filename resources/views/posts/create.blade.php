@include('inc.messages')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Зар оруулах</title>
	<link rel="shortcut icon" type="image/icon" href="{{ asset('assets/logo/icon.png') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <!-- Include your CKEditor styles here if needed -->
    <style>
        body {
            background-color: #000000;
            padding: 20px;
        }

        .form-container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #dbb1b1;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(59, 52, 52, 0.1);
        }

        .form-group {
            margin-bottom: 20px;
        }
        .btn{
            background-color: #000000
        }
    </style>
</head>
<body>
    @extends('admin.adminhome')
    @section('content')
        <div class="form-container">
            <h1 class="text-center mb-4" >Зар оруулах</h1>

            {!! Form::open(['action' => 'App\Http\Controllers\PostsController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
            
                <div class="form-group">
                    {{ Form::label('name', 'Барааны нэр') }}
                    {{ Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Барааны нэр']) }}
                </div>

                <div class="form-group">
                    {{ Form::label('description', 'Тайлбар') }}
                    {{ Form::textarea('description', '', ['class' => 'ckeditor form-control', 'placeholder' => 'Тайлбар']) }}
                </div>

                <div class="form-group">
                    {{ Form::label('price', 'Үнэ') }}
                    {{ Form::text('price', '', ['class' => 'form-control', 'placeholder' => 'Үнэ']) }}
                </div>

                <div class="form-group">
                    {{ Form::label('location', 'Байршил') }}
                    {{ Form::text('location', '', ['class' => 'form-control', 'placeholder' => 'Байршил']) }}
                </div>

                <div class="form-group">
                    {{ Form::label('cover_img', 'Зураг') }}
                    {{ Form::file('cover_img', ['class' => 'form-control-file']) }}
                </div>

                <br>

                {{ Form::submit('Зар Оруулах', ['class' => 'btn btn-primary btn-block']) }}

            {!! Form::close() !!}
        </div>
    @endsection    
</body>
</html>
