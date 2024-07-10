<?php

namespace Modules\About\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\About\Database\Factories\AboutFactory;
use Illuminate\Notifications\Notifiable;


class About extends Model
{
    use HasFactory, Notifiable;
    protected $table = "about_us";

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [
        'title',
        'describtion',
        'imge'
    ];

    protected static function newFactory()
    {
        //return AboutFactory::new();
    }
}
