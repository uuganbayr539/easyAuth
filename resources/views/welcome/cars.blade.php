<section id="featured-cars" class="featured-cars">
    <div class="container">
        <div class="section-header">
            <p>Бэлэн <span>зарагдаж буй</span> машинууд</p>
            <h2>Машинууд</h2>
        </div><!--/.section-header-->
        <div class="featured-cars-content">
            <div class="row">

                @foreach ($productInformation as $product)
                    <div class="product-card">
                        <h3>{{ $product->name }}</h3>
                        <p>{{ $product->description }}</p>
                        <p>Price: ${{ $product->price }}</p>
                        <p>Quantity: {{ $product->quantity }}</p>
                        <img class="product-image" src="/storage/cover_img/{{ $product->cover_img }}" alt="{{ $product->name }}">
                    </div>
                @endforeach

            </div>
        </div>
    </div><!--/.container-->
</section>

/// show blade tee adilhan haruuldag bolgoh
