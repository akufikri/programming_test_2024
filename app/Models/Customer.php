<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = [
        'customer',
        'movie_id'
    ];

    protected $table = 'customers';

    public function movie()
    {
        return $this->belongsTo(Movie::class);
    }
}
