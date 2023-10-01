<?php

namespace App\Http\Requests\V1;

use Illuminate\Foundation\Http\FormRequest;

class PropertySearchRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'filter.name' => 'string',
            'filter.price.from' => 'integer|required_with:filter.price.to',
            'filter.price.to' => 'integer|required_with:filter.price.from|gte:filter.price.from',
            'filter.bedrooms_count' => 'array',
            'filter.bedrooms_count.*' => 'integer',
            'filter.bathrooms_count' => 'array',
            'filter.bathrooms_count.*' => 'integer',
            'filter.storeys_count' => 'array',
            'filter.storeys_count.*' => 'integer',
            'filter.garages_count' => 'array',
            'filter.garages_count.*' => 'integer',
        ];
    }
}
