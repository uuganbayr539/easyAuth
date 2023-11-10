<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$products->name}} - products View</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
            padding: 20px;
        }

        .products-container {
            max-width: 600px;
            margin: 0 auto;
        }

        .products-card {
            background-color: #fff;
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

        .products-title {
            font-size: 28px;
            margin-bottom: 10px;
        }

        .products-description,
        .products-price,
        .products-quantity {
            font-size: 18px;
            color: #555;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>

<div class="products-container">

    <a href="/posts" class="btn btn-default back-btn">Back</a>

    <div class="products-card">
        <h1 class="products-title">{{$products->name}}</h1>
        <p class="products-description">{{$products->description}}</p>
        <p class="products-price">Price: ${{$products->price}}</p>
        <p class="products-quantity">Stock Quantity: {{$products->stock_quantity}}</p>
        <!-- Add more products details as needed -->
    </div>

</div>

</body>
</html>
