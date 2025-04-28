@extends('layouts.app')

@section('title', 'Registrar Producto')

@section('content')
  <div class="row justify-content-center">
    <div class="col-lg-6">
      <div class="card shadow-sm">
        <div class="card-body p-4">
          <h2 class="card-title mb-3 text-primary">Registrar Producto de Salud</h2>

          @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show">
              {{ session('success') }}
              <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
          @endif

          <form action="{{ route('products.store') }}" method="POST">
            @csrf

            <div class="mb-3 form-floating">
              <input type="text"
                     class="form-control @error('name') is-invalid @enderror"
                     id="name" name="name"
                     placeholder="Nombre del producto"
                     value="{{ old('name') }}">
              <label for="name">Nombre del Producto</label>
              @error('name')
                <div class="invalid-feedback">{{ $message }}</div>
              @enderror
            </div>

            <div class="mb-3 form-floating">
              <input type="number"
                     step="0.01"
                     class="form-control @error('price') is-invalid @enderror"
                     id="price" name="price"
                     placeholder="Precio"
                     value="{{ old('price') }}">
              <label for="price">Precio</label>
              @error('price')
                <div class="invalid-feedback">{{ $message }}</div>
              @enderror
            </div>

            <div class="mb-3">
              <label for="description" class="form-label">Descripción</label>
              <textarea class="form-control @error('description') is-invalid @enderror"
                        id="description"
                        name="description"
                        rows="4">{{ old('description') }}</textarea>
              @error('description')
                <div class="invalid-feedback">{{ $message }}</div>
              @enderror
            </div>

            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
              <button type="submit" class="btn btn-primary px-4">Registrar</button>
              <a href="{{ route('products.invoice') }}" class="btn btn-success px-4">
                Generar Factura
              </a>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection



