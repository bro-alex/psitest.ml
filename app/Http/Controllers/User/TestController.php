<?php

namespace App\Http\Controllers\User;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\TestResultes;
use App\Models\result_users;
use App\Models\User;


class TestController extends BaseController{
    public function __invoke(){
        $resultUserId = auth()->user()->id;
        $users = result_users::all();
        $testResultes = TestResultes::all();

        return view('psitest.test', compact('users', 'testResultes', 'resultUserId'));
    }

}