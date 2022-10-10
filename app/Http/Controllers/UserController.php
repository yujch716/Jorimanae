<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function SignUp(Request $request)
    {
        $request->validate([
            'user_id' => 'required',
            'user_pw' => 'required',
            'user_name' => 'required|min:3',
            'user_phone' => 'required|min:11',
            'user_email' => 'required|email',
            'user_address' => 'required',
            'user_address_detail' => 'required'
        ]);

        return redirect('/sign-in');
    }

}
