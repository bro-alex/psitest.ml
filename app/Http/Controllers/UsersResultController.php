<?php

namespace App\Http\Controllers;

use App\Http\Requests\UsersResultRequest;
use App\Models\result_users;

class UsersResultController extends Controller
{
    public function __invoke(UsersResultRequest $request){
        $data = $request->validated();
        result_users::firstOrCreate($data);
        return view('/psitest/test');
    }
}
