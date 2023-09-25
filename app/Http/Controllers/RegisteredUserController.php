<?php

namespace App\Http\Controllers;

use App\Models\RegisteredUser;
use App\Rules\PhoneValidation;
use Illuminate\Http\Request;

class RegisteredUserController extends Controller
{
    public function create()
    {
        return view('register-users');
    }

    public function store(Request $request)
    {
        $request->validate([
            'phone' => [new PhoneValidation],
        ]);

        RegisteredUser::create(['phone' => $request->phone]);
        return redirect()->back()->with('success', 'شماره موبایل با موفقیت ثبت شد');
    }

}
