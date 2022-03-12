@extends('layout.admin')
@section('content')
    <div class="container">
        <h1 class="text-center">All Roles</h1>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                   
                    <th scope="col">Control`</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($roles as $role)
                <tr>
                    <th scope="row">1</th>
                    <td>{{$role->name}}</td>
                    
                    <td  class="d-flex">
                        <a href="{{route('roles.show' ,$role->id)}}" class="btn btn-info">Show {{$role->name}}</a>
                        <a href="{{route('roles.edit' ,$role->id)}}" class="btn btn-warning">Edit </a>
                        {{-- <a href="" class="btn btn-danger">Delete</a> --}}
                        <form method="post" action="{{route('roles.destroy' , $role->id)}}">
                            @csrf
                            @method('DELETE')
                            <input type="submit" class="btn btn-danger" value="Delete">

                        </form>
                    </td>
                </tr>
                @endforeach
          
            </tbody>
            
        </table>
             
        <a href="{{route('roles.create')}}" class="btn btn-primary">ADD ROLE</a>
    </div>
@endsection
