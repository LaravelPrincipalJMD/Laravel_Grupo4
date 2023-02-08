@extends('template.generalNoNav')

@section('products')

<div class="table-responsive container">
    <table class="table table-white">
        <thead>
            <h1>Abaliable products: </h1>
        </thead>
        <tbody class="text-center">
            <tr>
                <th>Name:</th>
                <th>Descriptión:</th>
                <th>Stock:</th>
            </tr>
            @foreach ($products as $product)
                <tr>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->description }}</td>
                    <td>{{ $product->stock }}</td>
                    <td><a href="{{ route('admin.editar', $product) }}" class="btn btn-warning btn-sm">Edit</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <h2>Add a new product: </h2>
    <div>
        <form action="{{ route('admin.crear') }}" method="POST">
            @csrf
            <input type="text" name="name" value="{{ old('name') }}" placeholder="Name of the product" class="form-control mb-2"
                autofocus>
            <input type="text" name="description" value="{{ old('description') }}" placeholder="Description of the product" class="form-control mb-2">
            <input type="number" name="price" value="{{ old('price') }}" placeholder="Price" class="form-control mb-2">
            <input type="number" name="stock" value="{{ old('stock') }}" placeholder="Stock" class="form-control mb-2">
            <button class="btn btn-primary btn-block" type="submit">
                Add it
            </button>
        </form>
    </div>

@endsection
