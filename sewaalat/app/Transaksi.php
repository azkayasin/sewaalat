<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    //
    protected $table = 'transaksi';
    protected $primaryKey = 'id';

    public function booking()
    {
    	return $this->belongsTo('App\Booking');
    }

    public function barang()
    {
    	return $this->belongsTo('App\Barang');
    }
}
