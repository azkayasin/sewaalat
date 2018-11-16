<?php

use Illuminate\Database\Seeder;
use App\Kategori;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $kategori = new Kategori;
        $kategori->kategori =  'Alat Transportasi';
        $kategori ->save();

        $kategori = new Kategori;
        $kategori->kategori =  'Baju Adat';
        $kategori ->save();

        $kategori = new Kategori;
        $kategori->kategori =  'Peralatan';
        $kategori ->save();

        $kategori = new Kategori;
        $kategori->kategori =  'Hobi';
        $kategori ->save();

        $kategori = new Kategori;
        $kategori->kategori =  'Baju Adat';
        $kategori ->save();

        $kategori = new Kategori;
        $kategori->kategori =  'Elektronik';
        $kategori ->save();

        $kategori = new Kategori;
        $kategori->kategori =  'Penginapan';
        $kategori ->save();
    }
}
