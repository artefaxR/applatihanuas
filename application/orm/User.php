<?php
namespace Orm;

Use Illuminate\Database\Eloquent\Model;

class User extends Model {
    protected $table = 'user';

    public function post(){
        
        return $this->hasMany(Post::class);
    }


}