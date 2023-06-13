<?php

namespace App\Http\Requests;

class ShelterRequest extends BaseRequest
{
    public function rules(): array
    {
        $rules = [
            'name' => 'required|unique:shelters|max:255|min:3',
            'address' => 'required|string|max:255',
        ];

        return $this->getRules($rules);
    }
}

