<?php

namespace App\Http\Controllers;

use App\Http\Resources\UserCollection;
use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function show($id): JsonResponse
    {
        $user = User::query()->find($id);

        if(is_null($user)) {
            return $this->sendError('User does not found.');
        }

        return $this->sendResponse(new UserResource($user), 'User retrieved successfully.');
    }

    public function getUsers(): JsonResponse
    {
        $users = User::sortByCountImages();

        if(!$users) {
            return $this->sendError('Users does not exist');
        }

        return $this->sendResponse(new UserCollection($users), 'Users retrieved successfully.');
    }

    public function store(Request $request): JsonResponse
    {
        $input = $request->all();
        $validator = Validator::make($input, [
            'name' => 'required',
            'city' => 'required',
        ]);

        if ($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());
        }
        $user = User::create($input);
        return $this->sendResponse(new UserResource($user), 'User created successfully.');
    }

    public function update(Request $request, User $user): JsonResponse
    {
        $input = $request->all();
        $validator = Validator::make($input, [
            'name' => 'required',
            'city' => 'required',
        ]);

        if ($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());
        }
        $user->name = $input['name'];
        $user->city = $input['city'];
        $user->save();

        return $this->sendResponse(new UserResource($user), 'User update successfully');
    }

    public function destroy(User $user): JsonResponse
    {
        $user->delete();
        return $this->sendResponse(new UserResource($user), 'User deleted successfully');
    }
}
