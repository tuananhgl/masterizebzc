<?php


namespace BackendModule\Controllers;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(Request $request) {
        if ($request->method() == 'GET') {
            return view('backend.login');
        }
        if ($request->method() == 'POST') {
            $email = $request->email;
            $password = $request->password;
            if (\Auth::attempt(['email' => $email, 'password' => $password])) {
                return redirect()->route('config.index');
            } else {
                return redirect()->back();
            }
        }
    }
}