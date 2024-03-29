<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class StudentProfile extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'cid',
        'prefix',
        'fname',
        'mname',
        'lname',
        'data',
        'form_responses_id',
        'student_id',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'data' => 'array',
        'form_responses_id' => 'integer',
        'student_id' => 'integer',
    ];

    public function student(): BelongsTo
    {
        return $this->belongsTo(Student::class);
    }

    public function formResponses(): BelongsTo
    {
        return $this->belongsTo(FormResponses::class);
    }

    public function formResponse(): HasOne
    {
        return $this->hasOne(FormResponse::class);
    }
}
