<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Book extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $guarded = [];

    public function authors():BelongsToMany
    {
        return $this->belongsToMany(Author::class, 'book_authors');
    }
    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
