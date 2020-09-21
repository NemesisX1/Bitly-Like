<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ShortLink extends Model
{

    protected $fillable = [
        'shortened_link',
    ];

    public function link() {
        $this->belongsTo(Link::class);
    }
}
