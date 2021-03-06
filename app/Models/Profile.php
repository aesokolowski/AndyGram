<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'url',
        'image'
    ];

    public function followers() {
        return $this->belongsToMany(User::class)->using(UserProfile);
    }

    public function profileImage()
    {
        return ($this->image) ?
            '/storage/' . $this->image :
            '/img/no-image-icon-hi.png';
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    } 
}
