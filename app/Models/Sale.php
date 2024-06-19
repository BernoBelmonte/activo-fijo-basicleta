<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Item;

class Sale extends Model
{
    use HasFactory;

    protected $fillable = ['sale_date', 'total_price'];

    public function items()
    {
        return $this->belongsToMany(Item::class, 'sale_item')->withPivot('quantity', 'price');
    }
}
