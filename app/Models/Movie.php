<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    protected $fillable = [
        'code',
        'name',
        'stock_dvd',
        'price'
    ];

    protected $table = 'movies';

    public function customers()
    {
        return $this->hasMany(Customer::class);
    }
}
