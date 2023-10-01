<?php

namespace App\Services;
use App\Repositories\Interfaces\PropertyRepositoryInterface;

class PropertySearchService
{
    public function __construct(
        private readonly PropertyRepositoryInterface $repository
    ) {
    }

    public function search(array $searchParams): array
    {
        return $this->repository->search($searchParams);
    }
}
