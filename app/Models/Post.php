<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Post extends Model {
    
    use HasFactory;
    use Sluggable;
    
    // protected $fillable = ['title', 'excerpt', 'body'];
    protected $guarded = ['id'];
    // with adalah eager, mengurangi query agar website tidak lemot, jadi sekaligus
    // dikirimkan ke PostController
    protected $with = ['category', 'author'];

    public function scopeFilter($query, array $filters){
    // cara baca, ketika search bernilai false jangan dijalankan, tapi jika bernilai true jalankan fungsi closure/sama saja seperti pengkondisian menggunakan if else
        $query->when($filters['search'] ?? false, function($query, $search) {
            return $query->where(function($query) use ($search) {
                $query->where('title', 'like', '%' . $search . '%')
                        ->orWhere('body', 'like', '%' . $search . '%'); 
            });
        });

        $query->when($filters['category'] ?? false, function($query, $category) {
            return $query->whereHas('category', function($query) use($category) {
                $query->where('slug', $category);
            });
        });

        $query->when($filters['author'] ?? false, function($query, $author) {
            return $query->whereHas('author', function($query) use($author) {
                $query->where('username', $author);
            });
        });
        
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function author(){
        return $this->belongsTo(User::class, 'user_id');
    }

    public function getRouteKeyName(){
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