<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TestResultRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'a1' => 'integer',
            'a2' => 'integer',
            'a3' => 'integer',
            'a4' => 'integer',
            'a5' => 'integer',
            'a6' => 'integer',
            'a7' => 'integer',
            'a8' => 'integer',
            'a9' => 'integer',
            'a10' => 'integer',
            'b1' => 'integer',
            'b2' => 'integer',
            'b3' => 'integer',
            'b4' => 'integer',
            'b5' => 'integer',
            'b6' => 'integer',
            'b7' => 'integer',
            'b8' => 'integer',
            'b9' => 'integer',
            'b10' => 'integer',
            'c1' => 'integer',
            'c2' => 'integer',
            'c3' => 'integer',
            'c4' => 'integer',
            'c5' => 'integer',
            'c6' => 'integer',
            'c7' => 'integer',
            'c8' => 'integer',
            'c9' => 'integer',
            'c10' => 'integer',
            'd1' => 'integer',
            'd2' => 'integer',
            'd3' => 'integer',
            'd4' => 'integer',
            'd5' => 'integer',
            'd6' => 'integer',
            'd7' => 'integer',
            'd8' => 'integer',
            'd9' => 'integer',
            'd10' => 'integer',
            'e1' => 'integer',
            'e2' => 'integer',
            'e3' => 'integer',
            'e4' => 'integer',
            'e5' => 'integer',
            'e6' => 'integer',
            'e7' => 'integer',
            'e8' => 'integer',
            'e9' => 'integer',
            'e10' => 'integer',
            'result_user_id' => 'integer',
        ];
    }
}
