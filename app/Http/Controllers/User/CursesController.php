<?php

namespace App\Http\Controllers\User;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\TestResultes;
use App\Models\result_users;
use App\Models\User;


class CursesController extends BaseController{
    public function __invoke(){
        $name = auth()->user()->name;

        $users = result_users::all();
        $testResultes = TestResultes::all();

        return view('user.main.curses', compact('users', 'testResultes', 'name'));
    }

    public function delete($user){
        $user = result_users::find($user);
        $user->delete();
        $users = result_users::all();
        $testResultes = TestResultes::all();
        return view('user.main.curses', compact('users', 'testResultes'));
    }

}