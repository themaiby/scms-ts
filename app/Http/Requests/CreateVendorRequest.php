<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateVendorRequest extends FormRequest
{
    public const FIELD_NAME = 'name';

    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [self::FIELD_NAME => 'required'];
    }
}
