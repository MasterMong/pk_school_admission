<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Form extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'form_group_id',
        'name',
        'des',
        'is_guest',
        'is_enable',
        'limit_time',
        'start_date',
        'end_date',
        'is_enabled',
        'fields',
        'search_field',
        'status',
        'code_start',
        'code_leading_zero_length',
        'default_status',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'form_group_id' => 'integer',
        'start_date' => 'datetime',
        'end_date' => 'datetime',
        'fields' => 'array',
        'search_field' => 'array',
        'status' => 'array',
    ];

    public function formResponses(): HasMany
    {
        return $this->hasMany(FormResponse::class);
    }

    public function formGroup(): BelongsTo
    {
        return $this->belongsTo(FormGroup::class);
    }
}
