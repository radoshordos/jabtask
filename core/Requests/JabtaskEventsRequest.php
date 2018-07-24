<?php

namespace Core\Requests;

use Illuminate\Foundation\Http\FormRequest;

class JabtaskEventsRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [];
    }
}