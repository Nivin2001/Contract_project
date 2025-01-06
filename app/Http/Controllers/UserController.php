<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'phone' => 'required|string',
            'city' => 'required|string',
            'neighborhood' => 'required|string',

        ]);


        $user = new User();
        $user->name = $request->name;
        $user->phone = $request->phone;
        $user->city = $request->city;
        $user->neighborhood = $request->neighborhood;
        $user->save();
        return redirect()->route('contracts.index')->with('success', 'تم حفظ المستخدم بنجاح');
    }

}
