<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreUserRequest;
use App\Models\User;
class UserController extends Controller
{
    //入力フォームの表示
    public function create()
    {
        return view('register');
    }

    //リクエストの作成、応答
    public function store(StoreUserRequest $request)
    {
        User::create($request->validated());
        return view('register_success');
    }
}
