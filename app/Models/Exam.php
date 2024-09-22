<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Exam extends Model
{
    use HasFactory,HasUuids;

    protected $guarded = [];

    public function classroom(): BelongsTo
    {
        return $this->belongsTo(ClassRoom::class);
    }

    public function questions(): HasMany
    {
        return $this->hasMany(Question::class);
    }
    public function Scores(): HasMany
    {
        return $this->hasMany(Score::class);
    }
}
