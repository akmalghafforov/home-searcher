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
        sleep(2); // just for load demo

        return $this->repository->search($searchParams);
    }
}
