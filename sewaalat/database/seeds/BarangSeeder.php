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
        $barang->nama = 'mobil';
        $barang->harga = '100000';
        $barang->stock = '100';
        $barang->imageUrl = '/images/1/mobil.jpg';
        $barang->kategori_id = Kategori::where('id',1)->first()->id;
        $barang->save();

        $barang = new Barang;
        $barang->nama = 'kebaya';
        $barang->harga = '200000';
        $barang->stock = '200';
        $barang->imageUrl = '/images/2/kebaya.jpg';
        $barang->kategori_id = Kategori::where('id',2)->first()->id;
        $barang->save();

        $barang = new Barang;
        $barang->nama = 'palu';
        $barang->harga = '300000';
        $barang->stock = '300';
        $barang->imageUrl = '/images/3/palu.jpg';
        $barang->kategori_id = Kategori::where('id',3)->first()->id;
        $barang->save();

        $barang = new Barang;
        $barang->nama = 'jajan';
        $barang->harga = '400000';
        $barang->stock = '400';
        $barang->imageUrl = '/images/4/jajan.jpg';
        $barang->kategori_id = Kategori::where('id',4)->first()->id;
        $barang->save();

        $barang = new Barang;
        $barang->nama = 'adat5';
        $barang->harga = '500000';
        $barang->stock = '500';
        $barang->imageUrl = '/images/5/adat5.jpg';
        $barang->kategori_id = Kategori::where('id',5)->first()->id;
        $barang->save();

        $barang = new Barang;
        $barang->nama = 'hp';
        $barang->harga = '600000';
        $barang->stock = '600';
        $barang->imageUrl = '/images/6/hp.jpg';
        $barang->kategori_id = Kategori::where('id',6)->first()->id;
        $barang->save();

        $barang = new Barang;
        $barang->nama = 'rumah';
        $barang->harga = '700000';
        $barang->stock = '700';
        $barang->imageUrl = '/images/7/rumah.jpg';
        $barang->kategori_id = Kategori::where('id',7)->first()->id;
        $barang->save();
    }
}
