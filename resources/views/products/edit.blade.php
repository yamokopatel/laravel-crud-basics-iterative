<x-layout>

<form action="{{ route('products.update', ['product' => $product]) }}" method="post">
    @csrf
    @method('PUT')

    <input type="text" name="name" value="{{ $product->name }}">
    <input type="number" name="quantity" value="{{ $product->quantity }}">
    <textarea name="description">{{ $product->description }}</textarea>
    <input type="submit" value="Submit">
</form>

<!-- <a href="/products">Back to product list</a> -->

</x-layout>