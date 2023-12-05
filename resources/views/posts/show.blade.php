<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$product->name}} - Product View</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style>
        body {
            background-color: #000;
            color: #fff;
            padding: 20px;
            font-family: 'Poppins', sans-serif;
        }

        .product-container {
            max-width: 600px;
            margin: 0 auto;
        }

        .product-card {
            background-color: #212121;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }

        .back-btn {
            margin-bottom: 20px;
            display: inline-block;
            padding: 10px 20px;
            font-size: 16px;
            font-weight: bold;
            text-align: center;
            text-decoration: none;
            background-color: #007bff;
            color: #fff;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .back-btn:hover {
            background-color: #0056b3;
        }

        .product-title {
            font-size: 28px;
            margin-bottom: 10px;
            color: rgb(92, 232, 27);
        }

        .product-img {
            width: 100%;
            height: auto;
            border-radius: 10px;
            margin-bottom: 20px;
        }

        .product-description,
        .product-price,
        .product-quantity {
            font-size: 18px;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>

<div class="product-container">

    

    <div class="product-card">
        <a href="/posts" class="btn btn-default back-btn">Back</a>
        <h1 class="product-title">{{$product->name}}</h1>
        <img class="product-img" src="/storage/cover_img/{{$product->cover_img}}" alt="Product Image">
        <p class="product-description">{{$product->description}}</p>
        <p class="product-price">Price: ${{$product->price}}</p>
        <p class="product-quantity">Stock Quantity: {{$product->stock_quantity}}</p>
        <!-- Add more product details as needed -->
        @if (!Auth::guest())
        @if(Auth::user()->id == $product->user_id)
            {{-- <a href="/posts/{{ $product->id }}/edit" class="btn btn-default">Edit</a> --}}
            {!!Form::open(['action' => ['PostsController@destroy', $product->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                {{Form::hidden('_method', 'DELETE')}}
                {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
            {!!Form::close()!!}
        @endif
    @endif
    </div>
    

</div>

</body>
</html>
