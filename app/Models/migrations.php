<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class migrations extends Model
{
    use HasFactory;
    public $timestamps = false;

    public function authors()
    {
        return $this->belongsToMany(Author::class, 'book_authors');
    }
}
