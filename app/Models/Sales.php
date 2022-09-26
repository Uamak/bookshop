<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sales extends Model
{
    use HasFactory;

    protected $fillable=[

        'quantity',
        'sellingprice',
        'book_id',
        'customer_id',
    ];

    public function customers(){

        return $this->hasMany(Customer::class , 'customer_id');
    }
    public function books(){

        return $this->hasMany(Book::class,'book_id');
    }

}
