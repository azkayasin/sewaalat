<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    protected $table = 'barang';
    protected $primaryKey = 'id';

    public function barang()
    {
    	return $this->belongsTo('App\Barang');
    }

    public function kategori()
    {
    	return $this->hasOne('App\Kategori');
    }
}
