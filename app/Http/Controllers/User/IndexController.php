<?php

namespace App\Http\Controllers\User;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\User;
use App\Models\TestResultes;

class IndexController extends BaseController{
    public function __invoke(){
        $name = auth()->user()->name;
        $resultUserId = auth()->user()->id;
        $testResultes = TestResultes::All()->where('result_user_id', '=', $resultUserId);
        return view('user.main.index', compact('name', 'resultUserId', 'testResultes'));
    }
}