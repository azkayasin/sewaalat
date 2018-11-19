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
        $barang->nama = 'Mobil';
        $barang->harga = '300000';
        $barang->stock = '100';
        $barang->imageUrl = '/images/1/mobil.jpg';
        $barang->kategori_id = Kategori::where('id',1)->first()->id;
        $barang->save();

        $barang = new Barang;
        $barang->nama = 'Motor';
        $barang->harga = '75000';
        $barang->stock = '100';
        $barang->imageUrl = '/images/1/motor.jpg';
        $barang->kategori_id = Kategori::where('id',1)->first()->id;
        $barang->save();

        $barang = new Barang;
        $barang->nama = 'Bus';
        $barang->harga = '1000000';
        $barang->stock = '100';
        $barang->imageUrl = '/images/1/bis.jpg';
        $barang->kategori_id = Kategori::where('id',1)->first()->id;
        $barang->save();

        $barang = new Barang;
        $barang->nama = 'Kuda';
        $barang->harga = '200000';
        $barang->stock = '100';
        $barang->imageUrl = '/images/1/kuda.jpg';
        $barang->kategori_id = Kategori::where('id',1)->first()->id;
        $barang->save();

        $barang = new Barang;
        $barang->nama = 'Kebaya';
        $barang->harga = '80000';
        $barang->stock = '200';
        $barang->imageUrl = '/images/2/kebaya.jpg';
        $barang->kategori_id = Kategori::where('id',2)->first()->id;
        $barang->save();

        $barang = new Barang;
        $barang->nama = 'Baju Adat Bali';
        $barang->harga = '90000';
        $barang->stock = '200';
        $barang->imageUrl = '/images/2/adat-bali.jpg';
        $barang->kategori_id = Kategori::where('id',2)->first()->id;
        $barang->save();

        $barang = new Barang;
        $barang->nama = 'Palu';
        $barang->harga = '7000';
        $barang->stock = '300';
        $barang->imageUrl = '/images/3/palu.jpg';
        $barang->kategori_id = Kategori::where('id',3)->first()->id;
        $barang->save();

        $barang = new Barang;
        $barang->nama = 'Pemotong Rumput';
        $barang->harga = '250000';
        $barang->stock = '300';
        $barang->imageUrl = '/images/3/rumput.jpg';
        $barang->kategori_id = Kategori::where('id',3)->first()->id;
        $barang->save();

        $barang = new Barang;
        $barang->nama = 'Stick Biliyard';
        $barang->harga = '30000';
        $barang->stock = '400';
        $barang->imageUrl = '/images/4/stik.jpg';
        $barang->kategori_id = Kategori::where('id',4)->first()->id;
        $barang->save();

        $barang = new Barang;
        $barang->nama = 'Raket';
        $barang->harga = '15000';
        $barang->stock = '400';
        $barang->imageUrl = '/images/4/raket.jpg';
        $barang->kategori_id = Kategori::where('id',4)->first()->id;
        $barang->save();

        $barang = new Barang;
        $barang->nama = 'Hp';
        $barang->harga = '20000';
        $barang->stock = '600';
        $barang->imageUrl = '/images/5/hp.jpg';
        $barang->kategori_id = Kategori::where('id',5)->first()->id;
        $barang->save();

        $barang = new Barang;
        $barang->nama = 'Laptop';
        $barang->harga = '50000';
        $barang->stock = '600';
        $barang->imageUrl = '/images/5/laptop.jpg';
        $barang->kategori_id = Kategori::where('id',5)->first()->id;
        $barang->save();
        $barang = new Barang;

        $barang = new Barang;
        $barang->nama = 'Rumah';
        $barang->harga = '400000';
        $barang->stock = '700';
        $barang->imageUrl = '/images/6/rumah.jpg';
        $barang->kategori_id = Kategori::where('id',6)->first()->id;
        $barang->save();

        $barang->nama = 'Apartemen';
        $barang->harga = '200000';
        $barang->stock = '700';
        $barang->imageUrl = '/images/6/apartemen.jpg';
        $barang->kategori_id = Kategori::where('id',6)->first()->id;
        $barang->save();
    }
}
