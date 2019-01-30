<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class PostItem extends Model
{
    use Notifiable;
    public $table = "founditem";

    protected $fillable = [
        'itemname',
        'itemphoto',
        'datefound',
        'itemtype',
        'description',
        'status',
        'approval'
    ];
}
