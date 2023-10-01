<?php

namespace App\Repositories\Interfaces;

interface PropertyRepositoryInterface
{
    public function search(array $searchParams): array;
}
