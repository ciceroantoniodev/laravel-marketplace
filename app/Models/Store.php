<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Store extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'about',
        'phone',
        'whatsapp'
    ];


    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }


    //Has = Tem / Many = Muitos
    //
    public function products(): HasMany
    {
        return $this->hasMany(Product::class);
    }
}

