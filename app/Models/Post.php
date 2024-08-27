<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'email', 'date', 'image', 'description'
    ];

    protected $hidden = [

    ];

    public function galleries()
    {
        return $this->hasMany(PostGallery::class, 'post_id', 'id' );
    }
}
