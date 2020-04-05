<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // Table Name
    protected $table = 'posts';
    // Primary Key
    public $primaryKey = 'id';
    // Timestamps
    public $timestamps = true;

    # A single post belows to a user. Based on the relationship
    public function user(){
        return $this->belongsTo('\App\User');
    }

    public function comments(){
        return $this->hasMany(Comment::class);
    }
}
