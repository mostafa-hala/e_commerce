@extends('layout.admin')
@section('content')
    <div class="container">
        <h1 class="text-center">All Category</h1>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Categroy Name</th>
                    <th scope="col">summury</th> 
                    <th scope="col">Image</th> 
                    <th scope="col">Created-At</th>
                    <th scope="col">Control</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($cates as $cate)
                <tr>
                    <th scope="row">1</th>
                    
                    <td>{{$cate->title}}</td>
                    <td>{{$cate->desc}}</td>
                     <td><img src="{{URL::asset('img/')}}/{{$cate->image}}" height="50vh"></td> 
                    <td>{{$cate->created_at}}</td>
                    <td  class="d-flex">
                        @if (Auth::user()->role_id == 1)
                        <a href="{{route('cates.show' ,$cate->id)}}" class="btn btn-info">Show</a>
                        <a href="{{route('cates.edit' ,$cate->id)}}" class="btn btn-warning">Edit</a>
                        {{-- <a href="" class="btn btn-danger">Delete</a> --}}
                        <form method="post" action="{{route('cates.destroy' , $cate->id)}}">
                            @csrf
                            @method('DELETE')
                            <input type="submit" class="btn btn-danger" value="Delete">
                        </form>
                        @elseif(Auth::user()->role_id == 2)
                        <a href="{{route('cates.show' ,$cate->id)}}" class="btn btn-info">Show</a>
                        @endif
                    </td>
                </tr>
                @endforeach
          
            </tbody>
            
        </table>
             
        <a href="{{route('cates.create')}}" class="btn btn-primary">ADD CATEGORY</a>
    </div>
@endsection