<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Bb extends Model
{
    protected $fillable = [
        'title',
        'content',
        'price'
    ];

    protected function price(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => $value . ' руб.'
        );
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
