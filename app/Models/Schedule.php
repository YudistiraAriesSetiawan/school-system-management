<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Schedule extends Model
{
    use HasFactory,HasUuids;

    protected $guarded = [];

    public function classroom(): BelongsTo
    {
        return $this->belongsTo(Classroom::class,'classroom_id');
    }

    public function subject(): BelongsTo
    {
        return $this->belongsTo(Subject::class,'subject_id');
    }

    public function teacher(): BelongsTo
    {
        return $this->belongsTo(Teacher::class,'teacher_id');
    }


}
