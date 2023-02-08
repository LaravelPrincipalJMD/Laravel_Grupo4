@extends('template.generalNoNav')

<h2 class="text-center p-5">Editing product: {{ $products->name }}</h2>
@if (session('mensaje'))
    <div class="alert alert-success">{{ session('mensaje') }}</div>
@endif

<form class="container" action="{{ route('admin.actualizar', $products->id) }}" method="POST">
    @method('PUT')
    {{-- Necesitamos cambiar al método PUT para editar --}}
    @csrf {{-- Cláusula para obtener un token de formulario al enviarlo --}}

    @error('name')
        <div class="alert alert-danger"> El nombre es obligatorio </div>
    @enderror

    @error('description')
        <div class="alert alert-danger"> La descripción es obligatoria </div>
    @enderror

    <input type="text" name="name" class="form-control mb-2" value="{{ $products->name }}" placeholder="Name" autofocus>
    <input type="text" name="description" placeholder="Description" class="form-control mb-2" value="{{ $products->description }}">
    <input type="number" name="price" placeholder="Price" class="form-control mb-2" value="{{ $products->price }}">
    <input type="number" name="stock" placeholder="Stock" class="form-control mb-2" value="{{ $products->stock }}">
    <button class="btn btn-primary btn-block" type="submit">Save changes</button>
</form>
