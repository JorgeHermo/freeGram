<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $guarded = []; // let pass anything, we need to handle that anything later
    public function user(){
        return $this->belongsTo(User::class);
    }
}
