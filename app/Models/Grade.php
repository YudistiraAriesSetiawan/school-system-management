<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Grade extends Model
{
    use HasFactory,HasUuids;
    protected $guarded = [];
    public function student(): BelongsTo
    {
        return $this->belongsTo(Student::class,'student_id');
    }

    public function subject(): BelongsTo
    {
        return $this->belongsTo(Subject::class,'subject_id');
    }
}
