<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Cviebrock\EloquentSluggable\Sluggable;

class News extends Model
{
    use HasFactory, Sluggable;
    protected $fillable = [
        'slug',
        'image',
        'title',
        'author_id',
        'category_id',
        'content',];

        protected $with = ['author', 'category'];
    public function author():BelongsTo{
        return $this->belongsTo(User::class);  // Assuming User model has 'id' as primary key and 'author_id' as foreign key
    }
    public function category():BelongsTo{
        return $this->belongsTo(Category::class);  // Assuming Comment model has 'id' as primary key and 'news_id' as foreign key
    }
    public function scopeFilter(Builder $query, array $filters): void
    {
        $query->when($filters['search'] ?? false, fn($query, $search)=>
            $query->where('title', 'like', '%'. $search . '%')
        );
        $query->when($filters['category'] ?? false, fn($query, $category)=>
            $query->whereHas('category', fn($query) => $query->where('slug', $category))
        );
        $query->when($filters['author'] ?? false, fn($query, $author)=>
            $query->whereHas('author', fn($query) => $query->where('username', $author))
        );
    }
    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

}
