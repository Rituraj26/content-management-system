<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PriorityList extends Model
{
    use HasFactory;

    public function feature()
    {
        return $this->hasOne(Feature::class);
    }
}
