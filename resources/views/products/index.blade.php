<ul>
    @foreach ($allProducts as $product)
        <li>
            <h1>{{ $product->name }}</h1>
            <p>{{ $product->description }}</p>
            <a href="/products/{{ $product->id }}/show">Show</a>
            <a href="/products/{{ $product->id }}/delete">Delete</a>
        </li>
    @endforeach
</ul>

<a href="/products/create">Create new product</a>
