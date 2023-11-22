<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
            padding: 20px;
            font-family: 'Arial', sans-serif;
        }

        .product-container {
            max-width: 800px;
            margin: 0 auto;
        }

        .product-card {
            background-color: #fff;
            margin-bottom: 20px;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .product-title {
            font-size: 24px;
            margin-bottom: 10px;
            color: #007bff;
        }

        .product-description,
        .product-price,
        .product-location,
        .product-created-at {
            font-size: 16px;
            color: #555;
            margin-bottom: 5px;
            display: block;
        }

        .product-created-at {
            font-size: 12px;
            color: #777;
        }

        .no-products {
            text-align: center;
            font-size: 18px;
            color: #777;
            margin-top: 50px;
        }
    </style>
</head>
<body>
    <div class="product-container">

        <h1 class="text-center mb-4">Products</h1>

        @forelse ($products as $product)
            <div class="product-card">
                <h3 class="product-title"><a href="/posts/{{$product->id}}">{{$product->name}}</a></h3>
                <img style="width: 300px;" src="/storage/cover_img/{{$product->cover_img}}" alt="Product Image">
                <p class="product-description">{{$product->description}}</p>
                <p class="product-price">Үнэ: ${{$product->price}}</p>
                <p class="product-location">Хаяг: {{$product->location}}</p>
                <p class="product-created-at">Нийтлэсэн өдөр: {{$product->created_at}}</p>
            </div>
        @empty
            <p class="no-products">No Products Found</p>
        @endforelse

    </div>
</body>
</html>
