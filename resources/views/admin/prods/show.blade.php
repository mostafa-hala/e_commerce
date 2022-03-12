@extends('layout.admin')
@section('content')
    <div class="container">
        <h1 class="text-center">Show {{$prod->name}} Information</h1>
        <form>
            <div class="mb-3">
                <label class="form-label">Product Id</label>
                <input type="text" class="form-control" value="{{ $prod->id }}" readonly>


            </div>

            <div class="mb-3">
                <label class="form-label">Product Name</label>
                <input type="text" class="form-control" value="{{ $prod->name }}" readonly>


            </div>
            <div class="mb-3">
                <label class="form-label">Product Price</label>
                <input type="text" class="form-control" value="{{ $prod->price }}" readonly>


            </div>

            <div class="mb-3">
                <label class="form-label">Product Describtion</label>
                <input type="text" class="form-control" value="{{ $prod->desc }}" readonly>
             </div>
               
        </form>
    </div>
@endsection