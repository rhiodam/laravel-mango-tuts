<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengguna extends Model
{
    //
    protected $table = "pengguna";

    protected $fillable = ['nama','email','password','plainpassword',];

    public function telepon()
    {
        return $this->hasOne('App\Telepon');
    }

    public function hadiah()
    {
        return $this->belongsToMany('App\Hadiah');
    }
}
