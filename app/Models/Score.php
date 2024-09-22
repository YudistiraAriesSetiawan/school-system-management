<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Score extends Model
{
    use HasFactory,HasUuids;
    protected $guarded = [];

    public function student():BelongsTo
    {
        return $this->belongsTo(Student::class);
    }

    public function Exam():BelongsTo
    {
        return $this->belongsTo(Exam::class);
    }


}
