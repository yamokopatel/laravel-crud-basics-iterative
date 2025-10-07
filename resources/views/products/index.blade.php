<ul>
    @foreach ($allProducts as $product)
        <li>
            <h1>{{ $product->name }}</h1>
            <p>{{ $product->description }}</p>
        </li>
    @endforeach
</ul>

<a href="/products/create">Create new product</a>
