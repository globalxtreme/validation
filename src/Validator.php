<?php

namespace GlobalXtreme\Validation;

use GlobalXtreme\Validation\Exception\ValidationException;
use GlobalXtreme\Response\Response;
use GlobalXtreme\Validation\Support\FormRequest;
use Illuminate\Support\Facades\Validator as ValidatorFacade;

class Validator extends FormRequest
{
    /**
     * @param array $data
     * @param array $rules
     *
     * @return mixed
     * @throws ValidationException
     */
    public static function make(array $data, array $rules)
    {
        $validator = ValidatorFacade::make($data, $rules);
        if ($validator->fails()) {
            throw new ValidationException($validator);
        }

        return Response::object();
    }
}
