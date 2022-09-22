<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'price',
        'quantity',
        'image',
        'description',
        'suppliers_id',
    ];

    function suppliers(){

        return $this->belongsTo(Supplier::class);
    }
}
