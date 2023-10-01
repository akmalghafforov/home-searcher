<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\V1\PropertySearchRequest;
use App\Services\PropertySearchService;

class PropertyController extends Controller
{
    public function search(PropertySearchRequest $request, PropertySearchService $service): array
    {
        return $service->search($request->validationData());
    }
}
