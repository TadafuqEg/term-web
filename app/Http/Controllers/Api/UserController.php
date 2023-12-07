<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateFcmRequest;
use App\Http\Requests\UserLoginRequest;
use App\Http\Requests\UserRegisterRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function register(UserRegisterRequest $request)
    {
        $data = $request->validated();
        $data['password'] = Hash::make($data['password']);
        unset($data['password_confirmation']);
        $user = User::create($data);
        $user->access_token = $user->createToken('user')->plainTextToken;
        return response()->json([
            'success' => true,
            'data' => $user,
        ]);
    }

    public function login(UserLoginRequest $request)
    {
        if (auth()->attempt(['email' => $request['email'], 'password' => $request['password'],'type'=>'user'])) {
            $user =  auth()->user();
            if(isset($data['FCMToken']) && $data['FCMToken'] != null)
            {
                User::find($user->id)->update(['FCMToken',$request['FCMToken']]);
                $user->FCMToken = $data['FCMToken'];
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

    public function updateFCM(UpdateFcmRequest $request)
    {
        if(!auth('api')->check())
        {
            return response()->json([
                'success' => false,
                'message' => 'unauthorized'
             ],401);
        }
        $user = User::find(auth('api')->user()->id);
        $user->update([
            'FCMToken' => $request['FCMToken']
        ]);
        return response()->json([
            'success' => true,
            'data' => $user,
         ]);
    }

}
