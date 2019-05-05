<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{

    protected $table ='artikel';

    protected $fillable = [ 'judul' , 'body', ];

    //
    public function tags(){
        return $this->hasMany('App\Tag');
    }

}
