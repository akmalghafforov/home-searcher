<?php

namespace App\Repositories;
use App\Models\Property;
use App\Repositories\Interfaces\PropertyRepositoryInterface;

class PropertyRepository implements PropertyRepositoryInterface
{
    public function search(array $searchParams): array
    {
        $filter = $searchParams['filter'] ?? [];

        $query = Property::query();

        if (isset($filter['name'])) {
            $query->where('name', 'like', "%{$filter['name']}%");
        }

        if (isset($filter['price']['from']) && isset($filter['price']['to'])) {
            $query->whereBetween('price', [
                (integer) $filter['price']['from'],
                (integer) $filter['price']['to'],
            ]);
        }

        $exactMatchFilters = [
            'bedrooms_count',
            'bathrooms_count',
            'storeys_count',
            'garages_count',
        ];

        foreach ($exactMatchFilters as $column) {
            if (!isset($filter[$column])) {
                continue;
            }
            $query->whereIn($column, $filter[$column]);
        }

        return $query->get()->toArray();
    }
}
