<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function tag()
    {
        return $this->belongsTo(Tag::class);
    }

    public function statusList()
    {
        return $this->belongsTo(StatusList::class);
    }

    public function priorityList()
    {
        return $this->belongsTo(PriorityList::class);
    }
}
