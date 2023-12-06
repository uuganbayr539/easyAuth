<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Зарууд</title>
    <link rel="shortcut icon" type="image/icon" href="{{ asset('assets/logo/icon.png') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
            padding: 20px;
            font-family: 'Arial', sans-serif;
        }

        .product-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }

        .product-card {
            background-color: #2a2828;
            margin: 10px;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 300px; /* Adjust as needed */
            width: 100%;
        }

        .product-title {
            font-size: 24px;
            margin-bottom: 10px;
            color: rgb(92, 232, 27);
        }

        .product-description,
        .product-price,
        .product-location,
        .product-created-at {
            font-size: 16px;
            color: #e3dbdb;
            margin-bottom: 5px;
            display: block;
        }

        .product-created-at {
            font-size: 12px;
            color: #d7cdcd;
        }

        .no-products {
            text-align: center;
            font-size: 18px;
            color: #e3dddd;
            margin-top: 50px;
            width: 100%;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="text-center mb-4">Зарууд</h1>
        <div class="product-container">
            @forelse ($products as $product)
                <div class="product-card">
                    <h3 class="product-title"><a href="/posts/{{$product->id}}">{{$product->name}}</a></h3>
                    <img style="width: 100%;" src="/storage/cover_img/{{$product->cover_img}}" alt="Product Image">
                    <p class="product-description">{{$product->description}}</p>
                    <p class="product-price">Үнэ: ${{$product->price}}</p>
                    <p class="product-location">Хаяг: {{$product->location}}</p>
                    <p class="product-created-at">Нийтлэсэн өдөр: {{$product->created_at}}</p>
                </div>
            @empty
                <p class="no-products">No Products Found</p>
            @endforelse
        </div>
    </div>
</body>
</html>
