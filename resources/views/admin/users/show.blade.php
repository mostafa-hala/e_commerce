@extends('layout.admin')
@section('content')
    <div class="container">
        <h1 class="text-center">Show {{$user->name}} Information</h1>
        <form>
            <div class="mb-3">
                <label class="form-label">User Id</label>
                <input type="text" class="form-control" value="{{ $user->id }}" readonly>


            </div>

            <div class="mb-3">
                <label class="form-label">User Name</label>
                <input type="text" class="form-control" value="{{ $user->name }}" readonly>


            </div>
            <div class="mb-3">
                <label class="form-label">Email Address</label>
                <input type="email" class="form-control" value="{{ $user->email }}" readonly>
                    

             </div>
               
        </form>
    </div>
@endsection