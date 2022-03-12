@extends('layout.admin')
@section('content')
    <div class="container">
        <h1 class="text-center">All Product</h1>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Product Name</th>
                    {{-- <th scope="col">Describtion</th> --}}
                    <th scope="col">Price</th>
                    <th scope="col">Image</th>
                    <th scope="col">Created-At</th>
                    <th scope="col">Control</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($prods as $prod)
                <tr>
                    <th scope="row">1</th>
                    
                    <td>{{$prod->name}}</td>
                    {{-- <td>{{$prod->desc}}</td> --}}
                    <td>{{$prod->price}}</td>
                    <td><img src="{{URL::asset('img/')}}/{{$prod->image}}" height="50vh"></td>
                    <td>{{$prod->created_at}}</td>
                    <td  class="d-flex">
                        @if (Auth::user()->role_id == 1)
                        <a href="{{route('prods.show' ,$prod->id)}}" class="btn btn-info">Show</a>
                        <a href="{{route('prods.edit' ,$prod->id)}}" class="btn btn-warning">Edit</a>
                        {{-- <a href="" class="btn btn-danger">Delete</a> --}}
                        <form method="post" action="{{route('prods.destroy' , $prod->id)}}">
                            @csrf
                            @method('DELETE')
                            <input type="submit" class="btn btn-danger" value="Delete">
                        </form>
                        @elseif(Auth::user()->role_id == 2)
                        <a href="{{route('prods.show' ,$prod->id)}}" class="btn btn-info">Show</a>
                        @endif
                    </td>
                </tr>
                @endforeach
          
            </tbody>
            
        </table>
             
        <a href="{{route('prods.create')}}" class="btn btn-primary">ADD PRODUCT</a>
    </div>
@endsection