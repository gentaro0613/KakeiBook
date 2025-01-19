<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function showRegistrationForm()
    {
        return view('auth.register'); // 登録画面のビュー
    }

    public function register(Request $request)
    {
        // バリデーション
        $request->validate([
            'username' => 'required|string|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        // ユーザー作成
        User::create([
            'username' => $request->username,
            'password' => Hash::make($request->password),
        ]);

        // 登録完了画面へリダイレクト
        return redirect()->route('register.complete');
    }
}
