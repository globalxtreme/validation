<?php

namespace GlobalXtreme\Validation\Support;

use GlobalXtreme\Validation\Exception\ValidationException;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest as FormRequestIlluminate;

class FormRequest extends FormRequestIlluminate
{
    /**
     * @param Validator $validator
     *
     * @throws ValidationException
     */
    protected function failedValidation(Validator $validator)
    {
        throw new ValidationException($validator);
    }

}
