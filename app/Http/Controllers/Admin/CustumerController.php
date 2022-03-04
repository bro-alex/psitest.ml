<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\TestResultes;
use App\Models\result_users;

class CustumerController extends BaseController{
    public function __invoke(){

        $users = result_users::all();
        $testResultes = TestResultes::all();

        return view('admin.main.custumer', compact('users', 'testResultes'));
    }

    public function delete($user){
        $user = result_users::find($user);
        $user->delete();
        $users = result_users::all();
        $testResultes = TestResultes::all();
        return view('admin.main.custumer', compact('users', 'testResultes'));
    }

}