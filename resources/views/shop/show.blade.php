<!-- resources/views/show.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Information</title>
    <style>
        /* Add your CSS styles here */
        body {
            display: flex;
            flex-wrap: nowrap; /* Prevent wrapping onto the next line */
            justify-content: space-between; /* Distribute items with space between them */
        }

        .product-card {
            box-sizing: border-box;
            border: 1px solid #ccc;
            padding: 10px;
            margin-bottom: 10px;
            max-width: 300px;
            flex: 0 0 calc(33.33% - 20px);
        }

        .product-image {
            max-width: 100%;
            height: auto;
        }

    </style>
</head>
<body>
    @extends('admin.adminhome')
    @section('content')
        @foreach ($productInformation as $product)
            <div class="product-card">
                <h3>{{ $product->name }}</h3>
                <p>{{ $product->description }}</p>
                <p>Price: ${{ $product->price }}</p>
                <p>Quantity: {{ $product->quantity }}</p>
                <img class="product-image" src="/storage/cover_img/{{ $product->cover_img }}" alt="{{ $product->name }}">
            </div>
        @endforeach

    @endsection
</body>
</html>
