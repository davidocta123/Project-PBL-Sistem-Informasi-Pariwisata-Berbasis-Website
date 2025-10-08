<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Activitymodel;

class Categorymodel extends Model
{
    protected $guarded = ['id'];

    public function activity()
    {
        return $this->hasMany(Activitymodel::class);
    }
}