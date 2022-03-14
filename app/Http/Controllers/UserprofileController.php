<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserprofileController extends Controller
{
    //
    public function show($id)
    {
        //
        $user = User::findOrFail($id);
        return view('admin.users.show',compact('user'));
    }
}
