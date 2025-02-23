<?php

namespace App\Models;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    /** @use HasFactory<\Database\Factories\CommentFactory> */
    use HasUuids, HasFactory;

    protected $keyType = 'string';
    public $incrementing = false;

    protected $fillable = [
        'post_id',
        'user_id',
        'parent_id',
        'body',
    ];

    public function RelationParent()
    {
        return $this->belongsTo(Comment::class, 'parent_id');
    }

    public function RelationReplies()
    {
        return $this->hasMany(Comment::class, 'parent_id')->orderBy('created_at', 'desc');
    }

    // ✅ Batasi hanya 2 tingkat reply
    public function scopeAllowedReplies($query)
    {
        return $query->whereDoesntHave('parent.parent');
    }
    public function RelationPosts()
    {
        return $this->belongsTo(Post::class);
    }

    public function RelationUsers()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

}
