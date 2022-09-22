<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'telephone',
        'email',
        'address',
    ];

    public function books(){

        return $this->hasMany(Book::class);
    }
}
