<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    protected $fillable = [
        'article_id',
         'author',
          'content'
        ];

    public function article()
    {
        return $this->belongsTo(Article::class);
    }
}
