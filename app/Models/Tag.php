<?php

namespace App\Models;

use App\Models\Post;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;

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
        'slug',
    ];

    //Relationships
    public function RelationPosts()
    {
        return $this->belongsToMany(Post::class, 'post_has_tags', 'tag_id', 'post_id');
    }
}
