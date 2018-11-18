<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $table = 'booking';
    protected $primaryKey = 'id';

    public function user()
    {
    	return $this->hasOne('App\User');
    }

    public function booking()
    {
        return $this->hasMany('App\Transaksi');
    }
}
