<?php

namespace App\Http\Controllers;

use App\Http\Requests\TestResultRequest;
use App\Models\TestResultes;
use App\Models\result_users;

class TestResultController extends Controller
{
    public function __invoke(TestResultRequest $request){
        $data = $request->validated();

        $pok = $data['a1'] + $data['a2'] + $data['a3'] + $data['a4'] + $data['a5'] + $data['a6'] + $data['a7'] + $data['a8'] + $data['a9'] + $data['a10'];
        $unig = $data['b1'] + $data['b2'] + $data['b3'] + $data['b4'] + $data['b5'] + $data['b6'] + $data['b7'] + $data['b8'] + $data['b9'] + $data['b10'];
        $nespr = $data['c1'] + $data['c2'] + $data['c3'] + $data['c4'] + $data['c5'] + $data['c6'] + $data['c7'] + $data['c8'] + $data['c9'] + $data['c10'];
        $pred = $data['d1'] + $data['d2'] + $data['d3'] + $data['d4'] + $data['d5'] + $data['d6'] + $data['d7'] + $data['d8'] + $data['d9'] + $data['d10'];
        $otverg = $data['e1'] + $data['e2'] + $data['e3'] + $data['e4'] + $data['e5'] + $data['e6'] + $data['e7'] + $data['e8'] + $data['e9'] + $data['e10'];

        $usersall = result_users::all();
        $userId1 = collect($usersall)->last();
        $userId = (int) $userId1['id'];

        TestResultes::create([
            'pok' => $pok,
            'unig' => $unig,
            'nespr' => $nespr,
            'pred' => $pred,
            'otverg' => $otverg,
            'result_user_id' => $userId,
        ]);

        return view('/psitest/result', compact('pok', 'unig', 'nespr', 'pred', 'otverg'));
    } 
}
