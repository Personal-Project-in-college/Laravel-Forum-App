<?php

namespace App\Models;

use App\Models\Tag;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    /** @use HasFactory<\Database\Factories\PostFactory> */
    use HasUuids, HasFactory;

    protected $keyType = 'string';
    public $incrementing = false;
    
    public function getRouteKeyName()
    {
        return 'slug';
    }

    protected $fillable = [
        'title',
        'slug',
        'body',
        'cover_photo_path',
        'user_id',
    ];

    //Relationships
    public function RelationUsers()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function RelationTags()
    {
        return $this->belongsToMany(Tag::class, 'post_has_tags', 'post_id', 'tag_id');
    }
}
