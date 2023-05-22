<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class RegisterController extends Controller
{
    public function show()
    {
        return view('auth.register');
    }

    public function register(RegisterRequest $request)
    {
        // return request()->all();

        try{
            // DB::beginTransaction();
            $image = $request->file('image')->store('public/images');
            $url = Storage::url($image);
            if($request->validated()){
                User::create([
                    'name' => $request->name,
                    'username' => $request->username,
                    'email' => $request->email,
                    'password' => $request->password,
                    'phone' =>  $request->phone,
                    'image' =>  $url,
                ]);
            }
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
