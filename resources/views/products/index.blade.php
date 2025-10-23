<x-layout>
    <x-slot:title>
        List
    </x-slot>

    <div id="list">
        <ul>
            @foreach ($products as $product)
                <li class="element">
                    <h2 class="productName">{{ $product->name }}</h2>
                    <p class="productDesc">{{ $product->description }}</p>
                    <div class="rANDu">
                        <a href="{{ route('products.show', ['product' => $product]) }}">
                            <button>Show</button>
                        </a>
                        <a href="{{ route('products.edit', ['product' => $product]) }}">
                            <button>Edit</button>
                        </a>
                    </div>
                    <form action="{{ route('products.delete', ['product' => $product]) }}" method="post" class="deleteForm">
                        @csrf
                        @method('DELETE')

                        <input type="submit" value="Delete" class="deleteSubmit">
                    </form>
                </li>
            @endforeach
        </ul>
    </div>

    <!-- <a href="/products/create">Create new product</a> -->

</x-layout>