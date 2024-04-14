<?php

namespace Modules\User\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Collection;
use Modules\User\Http\Requests\CreateUserRequest;
use Modules\User\Http\Requests\LoginRequest;
use Modules\User\Http\Requests\UpdateUserRequest;
use Modules\User\Interfaces\Controllers\UserControllerInterface;
use Modules\User\Models\User;

class UserController extends Controller implements UserControllerInterface
{

    public function login(LoginRequest $request) 
    {
        $credentials = [
            "email" => $request->email,
            "password" => $request->password
        ];

        if (auth()->attempt($credentials)) {

            $user = auth()->user();

            return [
                'token' => $user->createToken('Laravel')->accessToken
            ];

        } else return response([
            'error' => 'Invalid credentials.'
        ], 401);

    }

    /**
     * Display a listing of the resource.
     */
    public function index() : Collection
    {
        $users = User::all();

        return $users;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateUserRequest $request)
    {
        //

        return response()->json([]);
    }

    /**
     * Show the specified resource.
     */
    public function show(User $user)
    {
        //

        return response()->json([]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateUserRequest $request, User $user)
    {
        //

        return response()->json([]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //

        return response()->json([]);
    }
}
