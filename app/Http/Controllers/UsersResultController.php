<?php

namespace App\Http\Controllers;

use App\Http\Requests\UsersResultRequest;
use App\Models\result_users;

class UsersResultController extends Controller
{
    public function __invoke(UsersResultRequest $request){
        $data = $request->validated();
        result_users::firstOrCreate($data);

        $usersall = result_users::all();
        $userId1 = collect($usersall)->last();
        $userId = (int) $userId1['id'];

        return view('/psitest/test', compact('userId'));
    }
}
