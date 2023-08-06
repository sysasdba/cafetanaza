<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $table = 'payment'; // Correct table name

    protected $fillable = [
        'image',
        'approve',
    ];

    public function reservation()
    {
        return $this->hasMany(Reservation::class);
    }
}
