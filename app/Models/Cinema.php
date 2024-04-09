<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Cinema extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', // 映画館名
        'prefecture_id', // 都道府県ID
        'address', // 都道府県以降の住所
    ];

    /**
     * シアター一覧
     */
    public function theaters(): HasMany
    {
        return $this->hasMany(Theater::class);
    }

    public function prefecture(): BelongsTo
    {
        return $this->belongsTo(Prefecture::class);
    }
}
