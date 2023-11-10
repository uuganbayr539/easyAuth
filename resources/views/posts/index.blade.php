
    <h1>Posts</h1>
    @if (count($products) > 0)
        @foreach ($products as $product)
            <div class="well">
                <h3><a href="/posts/{{$product->id}}">{{$product->name}}</a></h3>
                <small>{{$product->description}}</small>
            </div>
        @endforeach
    @else <p>No Post Found</p>
    @endif