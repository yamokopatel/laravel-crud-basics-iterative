<ul>
    @foreach ($allProducts as $product)
        <li>
            <h1>{{ $product->name }}</h1>
            <p>{{ $product->description }}</p>
            <a href="/products/{{ $product->id }}/show">Show</a>
            <a href="/products/{{ $product->id }}/edit">Edit</a>
            <form action="/products/{{ $product->id }}" method="post">
                @csrf
                @method('DELETE')

                <input type="submit" value="Delete">
            </form>
        </li>
    @endforeach
</ul>

<a href="/products/create">Create new product</a>
