<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Link extends Model
{
    protected $fillable = [
        'normal_link',
    ];

    public function short_link() {
        return $this->hasOne(ShortLink::class);
    }
}
