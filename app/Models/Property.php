<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $name
 * @property integer $price
 * @property integer $bedrooms_count
 * @property integer $bathrooms_count
 * @property integer $storeys_count
 * @property integer $garages_count
 * @property string $created_at
 * @property string $updated_at
 */
class Property extends Model
{
    use HasFactory;
}
