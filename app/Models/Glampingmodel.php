<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Bookingmodel;

class Glampingmodel extends Model
{
    use HasFactory;
    protected $guarded = ['id']; 

    // Cast otomatis: JSON, boolean, dan rating (float)
    protected $casts = [
        'facilities' => 'array',
        'is_availability' => 'boolean'
    ];

    // Relasi ke kategori (jika glamping juga punya kategori)
    public function booking()
    {
        return $this->hasMany(BookingModel::class);
    }

}
