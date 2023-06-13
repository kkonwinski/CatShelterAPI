<?php

namespace App\Http\Requests;

class CatRequest extends BaseRequest
{
    public function rules(): array
    {
        $rules = [
            'name' => 'required|unique:cats|max:255|min:3',
            'shelter_id' => 'required|exists:shelters,id|integer',
        ];

        return $this->getRules($rules);
    }
}
