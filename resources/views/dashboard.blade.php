<form method="POST" action="{{ route('logout') }}">
@csrf

<x-responsive-nav-link :href="route('logout')"
        onclick="event.preventDefault();
                    this.closest('form').submit();">
    {{ __('Log Out') }}
 {{-- <h1>Posts</h1>
    @if (count($products) > 0)
        @foreach ($products as $product)
            <div class="well">
                <h3>{{$product->name}}</h3>
                <small>{{$product->description}}</small>
            </div>
        @endforeach
    @else <p>No Post Found</p>
    @endif --}}
</x-responsive-nav-link>
</form>