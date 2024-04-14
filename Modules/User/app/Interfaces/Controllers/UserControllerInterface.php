<?php

namespace Modules\User\Interfaces\Controllers;

use Modules\User\Http\Requests\CreateUserRequest;
use Modules\User\Http\Requests\LoginRequest;
use Modules\User\Http\Requests\UpdateUserRequest;
use Modules\User\Models\User;

interface UserControllerInterface {

    public function login(LoginRequest $request);

    public function index();

    public function store(CreateUserRequest $request);

    public function show(User $user);

    public function update(UpdateUserRequest $request, User $user);

    public function destroy(User $user);
}