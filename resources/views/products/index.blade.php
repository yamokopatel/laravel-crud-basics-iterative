<ul>
    @foreach ($allProducts as $product)
        <li>
            <h1>{{ $product->name }}</h1>
            <p>{{ $product->description }}</p>
            <a href="{{ route('products.show', ['product' => $product]) }}">Show</a>
            <a href="{{ route('products.edit', ['product' => $product]) }}">Edit</a>
            <form action="{{ route('products.delete', ['product' => $product]) }}" method="post">
                @csrf
                @method('DELETE')

                <input type="submit" value="Delete">
            </form>
        </li>
    @endforeach
</ul>

<a href="/products/create">Create new product</a>
