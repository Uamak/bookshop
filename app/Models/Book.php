<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Sale;

class Book extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'price',
        'quantity',
        'image',
        'description',
        'supplier_id',
    ];

    public function suppliers(){

        return $this->belongsTo(Supplier::class);
    }

     public function sales(){

         return $this->belongsTo(Sale::class);
     }



}
