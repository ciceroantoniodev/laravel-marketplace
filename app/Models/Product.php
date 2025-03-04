<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Product extends Model
{
    /** @use HasFactory<\Database\Factories\ProductFactory> */
    use HasFactory;


    protected $fillable = [
        'name',
        'description'
    ];


    // Belongs = Pertence / To = Para
    //
    public function store(): BelongsTo
    {
        return $this->belongsTo(Store::class);
    }


    // Belongs = Pertence / To = Para / Many = Muitos
    //
    public function categories(): BelongsToMany
    {
        return $this->belongsToMany(Category::class);
    }
}
