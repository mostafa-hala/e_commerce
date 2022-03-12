@extends('layout.admin')
@section('content')
    <div class="container">
        <h1 class="text-center">All Users</h1>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Created-At</th>
                    <th scope="col">Control</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($roles_user as $user)
                <tr>
                    <th scope="row">1</th>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->created_at}}</td>
                    <td  class="d-flex">
                        <a href="{{route('users.show' ,$user->id)}}" class="btn btn-info">Show</a>
                        <a href="{{route('users.edit' ,$user->id)}}" class="btn btn-warning">Edit</a>
                        {{-- <a href="" class="btn btn-danger">Delete</a> --}}
                        <form method="post" action="{{route('users.destroy' , $user->id)}}">
                            @csrf
                            @method('DELETE')
                            <input type="submit" class="btn btn-danger" value="Delete">

                        </form>
                    </td>
                </tr>
                @endforeach
          
            </tbody>
            
        </table>
             
        <a href="{{route('users.create')}}" class="btn btn-primary">ADD USER</a>
    </div>
@endsection
