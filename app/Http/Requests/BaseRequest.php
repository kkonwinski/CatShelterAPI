<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

abstract class BaseRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    abstract public function rules(): array;

    protected function getRules(array $rules): array
    {
        if ($this->isMethod('patch')) {
            array_walk($rules, function (&$rule) {
                $rule = 'sometimes|' . $rule;
            });
        }

        return $rules;
    }
}
