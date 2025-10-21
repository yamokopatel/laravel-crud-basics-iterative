<x-layout>
    <x-slot:title>
        List
    </x-slot>
<ul>
    @foreach ($products as $product)
        <li>
            <h2>{{ $product->name }}</h2>
            <p>{{ $product->description }}</p>
            <a href="{{ route('products.show', ['product' => $product]) }}">
                <button>Show</button>
            </a>
            <a href="{{ route('products.edit', ['product' => $product]) }}">
                <button>Edit</button>
            </a>
            <form action="{{ route('products.delete', ['product' => $product]) }}" method="post">
                @csrf
                @method('DELETE')

                <input type="submit" value="Delete" class="submit">
            </form>
        </li>
    @endforeach
</ul>

<!-- <a href="/products/create">Create new product</a> -->

</x-layout>