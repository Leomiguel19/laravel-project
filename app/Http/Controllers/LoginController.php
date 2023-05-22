<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

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
                return redirect()->to('login')->withErrors('El username/correo y/o la contraseña son incorrectos.');
            }
            $user = Auth::getProvider()->retrieveByCredentials($credentials);
    
            Auth::login($user);
    
            $this->lastLoginAt($user);
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

    public function lastLoginAt($user)
    {
        $user->update(['last_login_at' => Carbon::now()]);
    }

    public function lastLoginCronJob()
    {
        $users = User::where('last_login_at', '!=', null)->get();
        Log::info('Inicio Cron lastLoginAt - '.Carbon::now());
        try {
            foreach($users as $user){    
                $currentDate = Carbon::now();
                $lastLoginDate=Carbon::parse($user->last_login_at);
                $daysDiff = $lastLoginDate->diffInDays($currentDate);
                
                if($daysDiff >= 30 ){
                    Mail::send('mail.lastLoginAt',  ['data' => ['user' => $user->name]], function ($msj) use ($user) {
                        $msj->subject('30 dias sin iniciar sesion en Laravel App');
                        $msj->to($user->email);
                    });
                }
            }
            Log::info('Ejecutado Cron lastLoginAt sin problemas.');
        } catch (\Throwable $th) {
            Log::error('Sucedio un error durante el proceso del cron lastLoginAt' . $th .Carbon::now());
        }
    }
}
