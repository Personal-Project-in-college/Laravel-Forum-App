<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Follow extends Model
{
    /** @use HasFactory<\Database\Factories\FollowFactory> */
    use HasUuids, HasFactory;

    protected $keyType = 'string';
    public $incrementing = false;

    protected $fillable = [
        'follower_id',
        'following_id',
    ];
}
