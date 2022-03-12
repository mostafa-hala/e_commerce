@extends('layout.admin')
@section('content')
    <div class="container">
        <h1 class="text-center">Edit Category</h1>
        <form method="POST" action="{{route('cates.update' , $cate->id)}}">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label class="form-label">Category Title</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ $cate->title }}">
                @error('title')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror

            </div>
            {{-- <div class="mb-3">
                <label class="form-label">Cate Describtion</label>
                <input type="text" class="form-control @error('desc') is-invalid @enderror" name="desc" value="{{ $cate->desc }}">
                @error('desc')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror

            </div> --}}
            <div class="mb-3">
                <div class="form-floating">
                    <textarea class="form-control  @error('desc') is-invalid @enderror" placeholder="Leave a desc here" id="floatingTextarea2" name="desc"
                        style="height: 100px"></textarea>
                        @error('desc')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                    <label for="floatingTextarea2">Cate Describtion</label>
                </div>
            

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection