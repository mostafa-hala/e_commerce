@extends('layouts.app')
@section('content')
    <div class="container">
        <h1 class="text-center" style="font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif">{{$user->name}} Profile</h1>
        <form action="{{ route('saveProfile') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label class="form-label">User Id</label>
                <input type="text" class="form-control" value="{{ $user->id }}" readonly>


            </div>

            <div class="mb-3">
                <label class="form-label">User Name</label>
                <input type="text" name="name" class="form-control" value="{{ $user->name }}">


            </div>
            <div class="mb-3">
                <label class="form-label">Email Address</label>
                <input type="email" name="email" class="form-control" value="{{ $user->email }}">
             </div>
            

             <button type="submit" class="btn btn-success">
                 Save
             </button>
               
        </form>
    </div>
@endsection