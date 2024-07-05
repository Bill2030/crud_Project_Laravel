
<x-layout>
    <div class="container mt-4">
<h1 class="mb-3">Products</h1>
<h4><a href="{{ route('products.create') }}">New Product</a></h4>
<div class="container">
    @foreach ($products as $product )
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Name</th>
                <th>Description</th>
                <th>Price</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><a href="{{ route('products.show',$product->id) }}">{{ $product->name }}</a></td>
                <td>{{ $product->description }}</td>
                <td>{{ $product->price }}</td>
            </tr>
        </tbody>
    </table>
    @endforeach
    {{ $products->links()}}
</div>
</div>
</x-layout>
