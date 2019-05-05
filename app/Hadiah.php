<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hadiah extends Model
{
    //
    protected $table ='hadiah';

    public function pengguna()
    {
        return $this->belongsToMany('App\Pengguna');
    }

    public function anggota()
    {
        return $this->belongsToMany(Anggota::class);
    }
}
