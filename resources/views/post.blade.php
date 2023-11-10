{{-- <div class="container">
    <h1>Products</h1>
    <div class="row">
        @foreach($products as $product)
            <div class="col-md-4">
                <div class="card">
                    <img src="{{ asset('path/to/product/images/' . $product->image) }}" class="card-img-top" alt="{{ $product->name }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $product->name }}</h5>
                        <p class="card-text">{{ $product->description }}</p>
                        <p class="card-text">Price: ${{ $product->price }}</p>
                        <p class="card-text">Stock Quantity: {{ $product->stock_quantity }}</p>
                        <a href="{{ route('products.show', $product->id) }}" class="btn btn-primary">View Product</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div> --}}
