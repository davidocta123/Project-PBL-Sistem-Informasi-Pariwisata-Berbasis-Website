<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Glampingmodel;

class Bookingmodel extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function glamping()
    {
        return $this->belongsTo(Glampingmodel::class);
    }

   
}
