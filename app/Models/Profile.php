<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    #use HasFactory;  --this was in my version of the framework
    #                   but not in the Tutorial I'm following

    # comment out before deploy -- for creating profiles by
    # command line
    protected $fillable = [
        'user_id',
        'title',
        'description',
        'url'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    } 
}
