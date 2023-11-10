@include('inc.messages')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Information</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <!-- Include your CKEditor styles here if needed -->
    <style>
        body {
            background-color: #f8f9fa;
            padding: 20px;
        }

        .form-container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .form-group {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>

<div class="form-container">
    <h1 class="text-center mb-4">Зар оруулах</h1>

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
            {{ Form::label('stock_quantity', 'Байршил') }}
            {{ Form::text('stock_quantity', '', ['class' => 'form-control', 'placeholder' => 'Байршил']) }}
        </div>

        <div class="form-group">
            {{ Form::label('cover_image', 'Зураг') }}
            {{ Form::file('cover_image', ['class' => 'form-control-file']) }}
        </div>

        <br>

        {{ Form::submit('Save Product', ['class' => 'btn btn-primary btn-block']) }}

    {!! Form::close() !!}
</div>
</body>
</html>
