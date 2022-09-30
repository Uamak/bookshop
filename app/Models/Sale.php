<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

use function Symfony\Component\String\b;

class Sale extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable=[

        'quantity',
        'sellingprice',
        'book_id',
        'customer_id',
        'total'
    ];

    public function books(){

        return $this->belongsTo(Book::class , 'id');
    }
    

    public function customers(){

        return $this->belongsTo(Customer::class , 'id');
    }


}
