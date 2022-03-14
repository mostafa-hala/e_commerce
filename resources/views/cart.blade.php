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
                @foreach ($carts as $cart)
                <tr>
                    <th scope="row">1</th>
                    
                    <td>{{$cart->prod->name}}</td>
                    {{-- <td>{{$prod->desc}}</td> --}}
                    <td>{{$cart->prod->price}}</td>
                    <td><img src="{{URL::asset('img/')}}/{{$cart->prod->image}}" height="50vh"></td>
                    <td>{{$cart->prod->created_at}}</td>
                    <td  class="d-flex">
                        
                        
                        {{-- <a href="" class="btn btn-danger">Delete</a> --}}
                        <form method="post" action="{{route('cart.destroy' , $cart->id)}}">
                            @csrf
                            @method('DELETE')
                            <input type="submit" class="btn btn-danger" value="Delete">
                        </form>
                        
                        
                    </td>
                </tr>
                @endforeach
          
            </tbody>
            
        </table>
             
        <a href="{{route('prods.create')}}" class="btn btn-primary">ADD PRODUCT</a>
    </div>
@endsection