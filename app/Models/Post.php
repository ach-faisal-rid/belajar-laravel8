<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    // protected $fillable = ['title', 'slug', 'excerpt', 'body'];
    protected $guarded = ['id'];
    protected $with = ['category', 'author'];

    public function scopeFilter($query, array $filters) {

        $query->when($filters['search'] ?? false, function($query, $search) {
            return $query->where('title', 'like', '%'.
            $search. '%')->orWhere('body',
            'like', '%'. $search. '%');
        });

        $query->when($filters['category'] ?? false, function($query, $category) {
            $query->whereHas('category', function($query) use ($category) {
                $query->where('slug', $category);
            });
        });
    }

    public function category() {
        return $this->belongsTo(Category::class);
    }

    public function author() {
        return $this->belongsTo(User::class, 'user_id');
    }
}
