<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;
    use HasFactory;
    use HasFactory;
    protected $primaryKey = ['code','tabled'];

    protected $fillable =
        [
            'tabled',
            'date',
            'code',

        ];

}
