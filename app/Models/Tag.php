<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    protected $table = "tags";

    protected $fillable = ['name'];

    public function categories()
    {
        return $this->morphedByMany(Category::class, 'taggable');
    }

    public function cars(): \Illuminate\Database\Eloquent\Relations\MorphToMany
    {
        return $this->morphedByMany(Car::class, 'taggable');
    }
}
