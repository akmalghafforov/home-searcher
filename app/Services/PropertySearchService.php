<?php

namespace App\Services;
use App\Repositories\Interfaces\PropertyRepositoryInterface;
use Carbon\Carbon;

class PropertySearchService
{
    public function __construct(
        private readonly PropertyRepositoryInterface $repository
    ) {
    }

    public function search(array $searchParams): array
    {
        $properties = $this->repository->search($searchParams);

        foreach ($properties as &$property) {
            $property['price'] = '$' . number_format($property['price']);
            $property['created_at'] = Carbon::parse($property['created_at'])->format('Y-m-d H:i');
        }

        return $properties;
    }
}
