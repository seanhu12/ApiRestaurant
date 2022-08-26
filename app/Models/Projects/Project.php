<?php

namespace App\Models\Projects;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Project extends Model
{
    use HasFactory;

    protected $fillable =
        [
            'name',
            'type',
            'code',
            'phase',
            'status',
            'problem_identified',
            'general_objective',
            'start_date',
            'end_date',
            'duration',
            'estimated_amount'
        ];
    protected $casts = [
        'start_date' => 'date:Y-m-d',
        'end_date' => 'date:Y-m-d',
    ];
    protected $dateFormat = 'Y-m-d';

    public function activities(): HasMany
    {
        return $this->hasMany(Activity::class);
    }

}
