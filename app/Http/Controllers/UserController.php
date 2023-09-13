<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class UserController extends Controller
{
        /**
         * Display a listing of the resource.
         */
        public function index(Request $request)
        {
            //Get all users from the database
            $users = User::query()->get();

            return new JsonResponse([
                'data' => $users,
            ]);
        }

        /**
         * Store a newly created resource in storage.
        */
        public function store(Request $request)
        {
           $create = User::query()->create([
            'name' => $request->name
           ]);
           return new JsonResponse([
            'data' => $create
           ]);
        }

        /**
         * Display the specified resource.
         */
        public function show(User $user_id)
        {
            return new JsonResponse([
                'data' => $user_id,
            ]);
        }

        /**
         * Update the specified resource in storage.
         */
        public function update(Request $request, User $user_id)
        {
            $update = $user_id->update([
                'name' => $request->name ?? $user_id->name
            ]);

            if (!$update) {
                return new JsonResponse([
                    'error' => 'Unable to update user'
                ]);
            }

            return new JsonResponse([
                'data' => $user_id,
            ]);
        }

        /**
         * Remove the specified resource from storage.
         */
        public function destroy(User $user_id)
        {
            $deleted = $user_id->forceDelete();

            if (!$deleted) {
                return new JsonResponse([
                    'error' => 'Unable to delete user'
                ]);
            }
            return new JsonResponse([
                'data' => 'deleted',
            ]);
        }

}
