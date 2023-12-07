<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\UserLoginRequest;
use App\Http\Requests\UserRegisterRequest;
use App\Models\User;

class UserController extends Controller
{
    public function register(UserRegisterRequest $request)
    {
        $user = User::create($request->validated());
        $user->access_token = $user->createToken('user')->plainTextToken;
        return response()->json([
            'success' => true,
            'data' => $user,
        ]);
    }

    public function login(UserLoginRequest $request)
    {
        if (auth()->attempt(['email' => $request['email'], 'password' => $request['password'],'type'=>'user'])) {
            $user =  auth('api')->user();
            if(isset($data['FCM_token']) && $data['FCM_token'] != null)
            {
                User::find($user->id)->update(['FCM_token',$request['FCM_token']]);
                $user->FCM_token = $data['FCM_token'];
            }
            $user->access_token = $user->createToken('user')->plainTextToken;
            return response()->json([
                'success' => true,
                'data' => $user,
             ]);
        }else{
            return response()->json([
                'success' => false,
                'message' => 'Invalid Credentials.'
             ]);
        }
    }

}
