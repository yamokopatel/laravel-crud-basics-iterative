<x-layout>

    <x-slot:title>
        Create
    </x-slot>

<form action="/products" method="post">
    @csrf
    <input type="text" name="name">
    <input type="number" name="quantity">
    <textarea name="description"></textarea>
    <input type="submit" value="Submit">
</form>

<a href="/products">Back to product list</a>

</x-layout>