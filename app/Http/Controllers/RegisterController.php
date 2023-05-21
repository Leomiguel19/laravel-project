<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class RegisterController extends Controller
{
    public function show()
    {
        return view('auth.register');
    }

    public function register(RegisterRequest $request)
    {
        try{
            // DB::beginTransaction();
            $user = User::create($request->validated());
            return redirect('/login')->with('success', "Su cuenta ha sido creada exitosamente!");
            // DB::commit();
            // return response()->json(['message' => 'User saved correctly!'], 200);
        } catch (\Throwable $th) {
            Log::error($th);
            // DB::rollBack();
            // return response()->json(['status' => 'error', 'message' => $th], 400);
        }   
    }
}
