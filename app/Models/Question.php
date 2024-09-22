<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Question extends Model
{
    use HasFactory,HasUuids;

    protected $guarded = [];

    public function exam(): BelongsTo
    {
        return $this->belongsTo(Exam::class,'exam_id');
    }

    protected function casts(): array
    {
        return [
            'answer' => 'array',
        ];
    }
}
