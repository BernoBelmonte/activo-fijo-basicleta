<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use App\Models\Sale;

class Item extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'category_id', 'quantity', 'price'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function sales()
    {
        return $this->belongsToMany(Sale::class, 'sale_item')->withPivot('quantity', 'price');
    }
}
