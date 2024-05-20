<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function index(Request $req)
    {
        $users = User::all();

        return response()->json([
            'statusCode' => 200,
            'data' => $users,
        ]);
    }

    public function show($id)
    {
        $user = User::find($id);

        if (!$user) {
            return response()->json([
                'statusCode' => 404,
                'message' => 'User Not Found'
            ], 404);
        }
        
        return response()->json([
            'statusCode' => 200,
            'data' => $user
        ], 200);

    }


    public function store(Request $req)
    {
        $validator = Validator::make($req->all(), [
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required',
            'role' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'statusCode' => 422,
                'errors' => $validator->errors()
            ], 422);
        }

        $user = new User();
        $user->name = $req->name;
        $user->email = $req->email;
        $user->password = bcrypt($req->password);
        $user->role = $req->role;
        $user->save();

        return response()->json([
            'statusCode' => 200,
            'message' => 'User created successfully',
        ], 200);
    }


    public function update(Request $req, $id)
    {
        $user = User::find($id);

        if (!$user) {
            return response()->json([
                'statusCode' => 404,
                'message' => 'User not found',
            ], 404);
        }

        $validator = Validator::make($req->all(), [
            'name' => 'required',
            'email' => 'required|email|unique:users,email,'.$id,
            'password' => 'required',
            'role' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'statusCode' => 422,
                'errors' => $validator->errors()
            ], 422);
        }

        $user->name = $req->name;
        $user->email = $req->email;
        $user->password = bcrypt($req->password);
        $user->role = $req->role;
        $user->save();

        return response()->json([
            'statusCode' => 200,
            'message' => 'User updated successfully',
        ], 200);
    }


    public function destroy($id)
    {
        $user = User::find($id);

        if (!$user) {
            return response()->json([
                'statusCode' => 404,
                'message' => 'User not found',
            ], 404);
        }

        $user->delete();

        return response()->json([
            'statusCode' => 200,
            'message' => 'User deleted successfully',
        ], 200);
    }
}
