<x-layout>

    <x-slot:title>
        Create
    </x-slot>

<form action="/products" method="post">
    @csrf
    <input type="text" name="name" value="{{ old('name') }}">
    <input type="number" name="quantity" value="{{ old('quantity') }}">
    <textarea name="description">{{ old('description') }}</textarea>
    <input type="submit" value="Submit">
</form>

<!-- <a href="/products">Back to product list</a> -->


@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

</x-layout>