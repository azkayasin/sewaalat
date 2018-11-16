<?php

use Illuminate\Database\Seeder;
use App\Barang;
use App\Kategori;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $barang = new Barang;
        $barang->nama = 'handuk';
        $barang->harga = '100000';
        $barang->stock = '100';
        $barang->imageUrl = 'zzz';
        $barang->kategori_id = Kategori::where('id',1)->first()->id;
        $barang->save();
    }
}
