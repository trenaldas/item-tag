<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Tag extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function itemTags(): HasMany
    {
        return $this->hasMany(ItemTag::class);
    }

    public function users(): BelongsTo
    {
        return $this->belongsTo(User::class, 'created_by_user_id');
    }

    public function teams(): BelongsTo
    {
        return $this->belongsTo(Team::class);
    }
}
