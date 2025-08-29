<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class post extends Model
{
   protected $fillable = [
   'title', 'slug', 'content', 'thumbnail', 'is_published'
   ];

   public function getThumbnailAttribute($value)
{
    return url('storage/' . $value);
}
}


