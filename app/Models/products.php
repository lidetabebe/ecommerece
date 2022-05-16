<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'unit',
        'price',
        'quantity',
        ];
        public function Catagories()
        {
            return $this->belongsto (Catagory::class);

        }
       
}