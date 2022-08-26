<?php

namespace App\Models\Projects;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Task extends Model
{
    use HasFactory;

    protected $fillable =
        [
            'name',
            'code',
            'status',
            'closed',
            'activity_id',
        ];

    public function activity(): BelongsTo
    {
        return $this->belongsTo(Activity::class);
    }
}
