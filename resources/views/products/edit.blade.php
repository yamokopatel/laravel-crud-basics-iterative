<form action="{{ route('products.update', ['product' => $singleProduct]) }}" method="post">
    @csrf
    @method('PUT')

    <input type="text" name="name" value="{{ $singleProduct->name }}">
    <input type="number" name="quantity" value="{{ $singleProduct->quantity }}">
    <textarea name="description">{{ $singleProduct->description }}</textarea>
    <input type="submit" value="Submit">
</form>

<a href="/products">Back to product list</a>