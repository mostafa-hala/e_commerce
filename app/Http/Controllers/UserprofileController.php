<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUserRequest;

class UserprofileController extends Controller
{
    //
    public function show()
    {
    
        return view('admin.userprofile.show', [
            'user' => auth()->user()
        ]);
    }

    public function save(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required',
        ]);

        $user = auth()->user();

        $user->update($validated);
        
        return back();
    }
}
