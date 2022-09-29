<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use function Symfony\Component\String\b;

class Sale extends Model
{
    use HasFactory;

    protected $fillable=[

        'quantity',
        'sellingprice',
        'book_id',
        'customer_id',
    ];

    public function books(){

        return $this->belongsTo(Book::class , 'id');
    }
    

    public function customers(){

        return $this->belongsTo(Customer::class , 'id');
    }


}
