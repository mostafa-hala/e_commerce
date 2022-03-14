@extends('layout.admin')
@section('content')
    <div class="container">
        <h1 class="text-center">Edit User</h1>
        <form method="POST" action="{{route('users.update' , $user->id)}}">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label class="form-label">User Name</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $user->name }}">
                @error('name')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror

            </div>
            <div class="mb-3">
                <label class="form-label">Email Address</label>
                <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $user->email }}">
                @error('email')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror

            </div>
            <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="password" class="form-control @error('password') is-invalid @enderror" name="password">
            </div>
            @error('password')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
