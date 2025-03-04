<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Category extends Model
{
    /** @use HasFactory<\Database\Factories\CategoryFactory> */
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'slug'
    ];


    // Belongs = Pertence / To = Para / Many = Muitos
    //
    public function products(): BelongsToMany
    {
        return $this->belongsToMany(Product::class);
    }
}
