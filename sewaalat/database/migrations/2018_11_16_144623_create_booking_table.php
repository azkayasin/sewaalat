<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookingTable extends Migration
{
    public $tablename = 'booking';
    /*
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tablename, function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_pemesan');
            $table->string('alamat_pemesan');
            $table->string('barang');
            $table->string('harga');
            $table->string('total');
            $table->char('barang_id');
            $table->char('user_id');
            $table->timestamps();

            $table->index('barang_id');
            $table->index('user_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists($this->tablename);
    }
}
