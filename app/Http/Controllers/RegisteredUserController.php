<?php

namespace App\Http\Controllers;

use App\Http\Requests\Auth\RegstrationRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class RegisteredUserController extends Controller
{
    public function create()
    {
        return view('auth.register');
    }

    public function store(RegstrationRequest $request)
    {

        $data = $request->validated();

        $user = User::query()->create($data);

        Auth::login($user);

        return redirect('/jobs');
    }

}
