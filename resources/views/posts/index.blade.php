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
        }

        .product-description,
        .product-price,
        .product-quantity {
            font-size: 16px;
            color: #555;
            margin-bottom: 5px;
            display: block;
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

    @if (!empty($products))
        @foreach ($products as $product)
            <div class="product-card">
                <h3 class="product-title"><a href="/posts/{{$product->id}}">{{$product->name}}</a></h3>
                <p class="product-description">{{$product->description}}</p>
                <p class="product-price">Price: ${{$product->price}}</p>
                <p class="product-quantity">Stock Quantity: {{$product->stock_quantity}}</p>
            </div>
        @endforeach
    @else
        <p class="no-products">No Products Found</p>
    @endif

</div>

</body>
</html>
