@extends('admin.adminhome')
@section('content')
    @include('inc.messages')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Бараа оруулах</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <!-- Include your CKEditor styles here if needed -->
    <style>
        body {
            background-color: #2c3e50; /* Dark background color */
            padding: 20px;
            animation: fadeIn 1s ease-out; /* Fade-in animation */
        }

        .form-container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #34495e; /* Darker container background color */
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5); /* Darker shadow */
            animation: slideIn 1s ease-out; /* Slide-in animation */
        }

        .form-group {
            margin-bottom: 20px;
        }

        /* Custom Animations */
        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }

        @keyframes slideIn {
            from {
                transform: translateY(-20px);
                opacity: 0;
            }
            to {
                transform: translateY(0);
                opacity: 1;
            }
        }
    </style>
</head>

<body>
    <div class="form-container">
        <h1 class="text-center mb-4" style="color: #ecf0f1;">Бараа оруулах</h1>

        {!! Form::open(['action' => 'App\Http\Controllers\ProductController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}

        <div class="form-group">
            {{ Form::label('name', 'Барааны нэр', ['style' => 'color: #ecf0f1;']) }}
            {{ Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Барааны нэр']) }}
        </div>

        <div class="form-group">
            {{ Form::label('description', 'Тайлбар', ['style' => 'color: #ecf0f1;']) }}
            {{ Form::textarea('description', '', ['class' => 'ckeditor form-control', 'placeholder' => 'Тайлбар']) }}
        </div>

        <div class="form-group">
            {{ Form::label('price', 'Үнэ', ['style' => 'color: #ecf0f1;']) }}
            {{ Form::text('price', '', ['class' => 'form-control', 'placeholder' => 'Үнэ']) }}
        </div>

        <div class="form-group">
            {{ Form::label('quantity', 'Тоо Ширхэг', ['style' => 'color: #ecf0f1;']) }}
            {{ Form::text('quantity', '', ['class' => 'form-control', 'placeholder' => 'Тоо Ширхэг']) }}
        </div>

        <div class="form-group">
            {{ Form::label('cover_img', 'Зураг', ['style' => 'color: #ecf0f1;']) }}
            {{ Form::file('cover_img', ['class' => 'form-control-file']) }}
        </div>

        <br>

        {{ Form::submit('Зар Оруулах', ['class' => 'btn btn-primary btn-block']) }}

        {!! Form::close() !!}
    </div>
</body>

</html>

@endsection