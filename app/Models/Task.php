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
        return $this->hasOne(Task::class);
    }

    public function statusList()
    {
        return $this->hasOne(StatusList::class);
    }

    public function priorityList()
    {
        return $this->hasOne(PriorityList::class);
    }
}
