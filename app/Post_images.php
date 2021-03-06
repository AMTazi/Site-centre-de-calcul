<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post_images extends Model
{
    use Helpers ;
    
    protected $fillable = ['path','tn_path'] ;
    
    public function post()
    {
        return $this->belongsTo(Post::class) ; 
    }
}
