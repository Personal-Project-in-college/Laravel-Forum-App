<?php

namespace App\Models;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Like extends Model
{
    /** @use HasFactory<\Database\Factories\LikeFactory> */
    use HasUuids, HasFactory;

    protected $keyType = 'string';
    public $incrementing = false;
    
    protected $fillable = [
        'post_id',
        'user_id',
    ];

    public function RelationPosts()
    {
        return $this->belongsTo(Post::class);
    }

    public function RelationUsers()
    {
        return $this->belongsTo(User::class);
    }
}
