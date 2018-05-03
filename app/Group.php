<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    protected $fillable = [
        'name',
    ];

    public static function boot()
    {
        parent::boot();

        static::saving(function($group) {
            $group->saves = $group->saves + 1;
        });
    }
}
