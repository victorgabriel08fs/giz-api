<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Tymon\JWTAuth\Facades\JWTAuth;

class LoginController extends Controller
{
    public function login(LoginRequest $request)
    {
        try {
            $credentials = $request->only('email', 'password');
            if ($token = auth('api')->attempt($credentials)) {
                if (in_array($request['role'], auth()->user()->getRoleNames()->toArray())) {
                    return response()->json([
                        'access_token' => $token,
                        'token_type' => 'bearer',
                        'expires_in' => auth('api')->factory()->getTTL() * 60, // Tempo de vida do token em segundos
                        'user' => auth('api')->user(),
                        'role' => $request['role']
                    ]);
                }
            }

            return response()->json(['error' => 'Unauthorized'], 401);
        } catch (\Throwable $th) {
            return response()->json(['message' => $th->getMessage()], 500);
        }
    }

    public function logout(Request $request)
    {
        try {
            Auth::guard('api')->logout();

            return response()->json(['message' => 'Logout realizado com sucesso']);
        } catch (\Throwable $th) {
            return response()->json(['message' => $th->getMessage()], 500);
        }
    }

    public function me(Request $request)
    {
        try {
            if (in_array($request['role'], auth()->user()->getRoleNames()->toArray())) {
                return response()->json([
                    'user' => auth()->user(),
                    'role' => $request['role']
                ]);
            }
            return response()->json(['error' => 'Unauthorized'], 401);
        } catch (\Tymon\JWTAuth\Exceptions\TokenExpiredException $e) {
            return response()->json(['error' => 'Token expirado'], Response::HTTP_UNAUTHORIZED);
        } catch (\Tymon\JWTAuth\Exceptions\TokenInvalidException $e) {
            return response()->json(['error' => 'Token inválido'], Response::HTTP_UNAUTHORIZED);
        } catch (\Tymon\JWTAuth\Exceptions\JWTException $e) {
            return response()->json(['error' => 'Token ausente'], Response::HTTP_UNAUTHORIZED);
        }
    }
}
