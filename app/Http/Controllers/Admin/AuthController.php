<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function loginPage()
    {
        if (Auth::check() === true) {
            return redirect()->route('home');
        }

        return view('panel.index');
    }

    public function home()
    {
        return view('panel.dashboard');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (in_array('', $credentials)) {
            $response['message'] = $this->message->write('Preencha todos os campos para efetuar login!', 'danger')->render();
            return response()->json($response);
        }

        if (!filter_var($request->email, FILTER_VALIDATE_EMAIL)) {
            $response['message'] = $this->message->write('Informe um e-mail válido para efetuar login!', 'danger')->render();
            return response()->json($response);
        }

        if (!Auth::attempt($credentials)) {
            $response['message'] = $this->message->write('O usuário e senha informados não conferem!', 'danger')->render();
            return response()->json($response);
        }

        $this->authenticated($request->getClientIp());
        $response['redirect'] = route('home');
        return $response;
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }

    private function authenticated(string $ip)
    {
        $user = User::where('id', Auth::user()->id);
        $user->update([
            'last_login_at' => date('Y-m-d H:m:i'),
            'last_login_ip' => $ip
        ]);
    }
}
