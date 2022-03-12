@extends('layout.admin')
@section('content')
    <div class="container">
        <h1 class="text-center">Edit Product</h1>
        <form method="POST" action="{{route('prods.update' , $prod->id)}}">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label class="form-label">Product Name</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $prod->name }}">
                @error('name')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror

            </div>
            <div class="mb-3">
                <label class="form-label">Product Price</label>
                <input type="namber" class="form-control @error('price') is-invalid @enderror" name="price" value="{{ $prod->price }}">
                @error('price')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror

            </div>
            <div class="mb-3">
                <label class="form-label">Product Describtion</label>
                <input type="text" class="form-control @error('desc') is-invalid @enderror" name="desc" value="{{ $prod->desc }}">
                @error('desc')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror

            </div>
            

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection