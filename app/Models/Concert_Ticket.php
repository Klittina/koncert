<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Concert_Ticket extends Model
{
    use HasFactory;
    protected $fillable = [
        'order_id',
        'performer',
        'location',
    ];
}
