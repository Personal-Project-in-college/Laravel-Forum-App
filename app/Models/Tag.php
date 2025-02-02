<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    /** @use HasFactory<\Database\Factories\TagFactory> */
    use HasUuids, HasFactory;

    protected $keyType = 'string';
    public $incrementing = false;
    
    public function getRouteKeyName()
    {
        return 'slug';
    }
    
    protected $fillable = [
        'name',
        'slug,'
    ];
}
