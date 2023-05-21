<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class LoginController extends Controller
{
    public function show()
    {
        if(Auth::check()){
            return redirect('/home');
        }
        return view('auth.login');
    }

    public function login(LoginRequest $request)
    {
        try{
            $credentials = $request->getCredentials();
        
            if(!Auth::validate($credentials)){
                return redirect()->to('login')->withErrors('auth.failed');
            }
            $user = Auth::getProvider()->retrieveByCredentials($credentials);
    
            Auth::login($user);
    
            return $this->authenticated($request, $user);
        } catch (\Throwable $th) {
            Log::error($th);
            return response()->json(['status' => 'error', 'message' => $th], 400);
        } 
    }

    protected function authenticated(Request $request, $user) 
    {
        return redirect()->route('home.index');
    }
}
