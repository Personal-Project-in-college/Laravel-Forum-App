<?php

namespace App\Models;

use DOMDocument;
use App\Models\Tag;
use App\Models\Like;
use App\Models\User;
use App\Models\Comment;
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

    public function RelationLikes()
    {
        return $this->hasMany(Like::class);
    }

    public function RelationComments()
    {
        return $this->hasMany(Comment::class);
    }

    public function getFormattedBodyAttribute()
    {
        $body = $this->body;

        // Load body ke dalam DOMDocument
        $dom = new DOMDocument();
        libxml_use_internal_errors(true); // Supaya error karena tag HTML aneh tidak muncul
        $dom->loadHTML(mb_convert_encoding($body, 'HTML-ENTITIES', 'UTF-8'));
        libxml_clear_errors();

        // Ambil semua elemen di dalam body
        $tags = [
            'h2' => 'text-xl sm:text-3xl tracking-tight font-extrabold text-gray-900 dark:text-white',
            'h3' => 'text-base sm:text-xl font-semibold text-gray-900 dark:text-white',
            'p' => 'text-xs sm:text-lg text-gray-800 dark:text-neutral-200',
            'img' => 'w-full object-cover rounded-xl',
            'figcaption' => 'mt-3 mb-3 text-xs sm:text-lg text-start text-blue-500 dark:text-neutral-200',
            'ul' => 'list-disc list-outside space-y-5 ps-5 text-xs sm:text-lg text-gray-800 dark:text-neutral-200',
            'ol' => 'list-decimal list-inside space-y-5 text-xs sm:text-lg text-black dark:text-neutral-200',
            'li' => 'ps-2',
            'blockquote' => 'text-center text-xs sm:text-lg p-4 sm:px-7 italic border-l-4 border-gray-300 dark:border-gray-600 text-gray-800 dark:text-neutral-200',
            'pre' => 'bg-gray-900 text-white text-xs sm:text-lg p-4 rounded-lg overflow-x-auto dark:bg-neutral-800 dark:text-neutral-200',
            'a' => 'text-blue-500 text-xs sm:text-lg'
        ];

        foreach ($tags as $tag => $class) {
            $elements = $dom->getElementsByTagName($tag);
            foreach ($elements as $element) {
                $existingClass = $element->getAttribute('class');
                $element->setAttribute('class', trim("$existingClass $class"));
            }
        }

        // Kembalikan hasil HTML yang sudah dimodifikasi
        return $dom->saveHTML();
    }

}
