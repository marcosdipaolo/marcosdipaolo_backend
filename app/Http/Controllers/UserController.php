<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserCreateRequest;
use App\Models\User;
use Illuminate\Http\JsonResponse;

class UserController extends Controller
{
    public function create(UserCreateRequest $request): JsonResponse
    {
        try {
            return response()->json(User::create($request->all()));
        }
        catch(\Throwable $e){
            return response()->json(['error' => $e->getMessage()]);
        }
    }
}
