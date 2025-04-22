<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Feedback extends Model
{
    use HasUuids;

    protected $table = 'feedbacks';
    protected $keyType = 'string';
    public $incrementing = false;
    
    protected $fillable = [
        'email',
        'subject',
        'message',
    ];
}
