<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest; // Si creas un FormRequest
use Illuminate\Http\Response;

class AuthController extends Controller
{
    /**
     * Register a new user
     * @param RegisterRequest $request
     * @return JsonResponse
     */
    public function register(RegisterRequest $request): JsonResponse
    {
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return response()->json([
            'token' => $user->createToken('MyApp')->plainTextToken,
            'user' => $user
        ], Response::HTTP_CREATED);
    }

    /**
     * Login a user
     * @param Request $request
     * @return JsonResponse
     */
    public function login(Request $request): JsonResponse
    {
        if (!Auth::attempt($request->only('email', 'password'))) {
            return response()->json(['message' => 'Invalid credentials'], 401);
        }

        /** @var User $user */
        $user = Auth::user();

        return response()->json([
            'token' => $user->createToken('MyApp')->plainTextToken,
            'user' => $user
        ], Response::HTTP_OK);
    }

    /**
     * Logout a user
     * @param Request $request
     * @return JsonResponse
     */
    public function logout(Request $request): JsonResponse
    {
        Auth::logout();

        return response()->json([
            'message' => 'Logout Successful'
        ], Response::HTTP_OK);
    }
}
