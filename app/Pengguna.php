<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengguna extends Model
{
    //
    protected $table = "pengguna";

    public function telepon()
    {
        return $this->belongsTo('App\Telepon');
    }
}
