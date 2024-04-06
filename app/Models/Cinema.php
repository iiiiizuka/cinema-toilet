<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Cinema extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'prefecture_id',
    ];

    /**
     * シアター一覧
     */
    public function theaters(): HasMany
    {
        return $this->hasMany(Theater::class);
    }
}
