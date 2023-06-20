<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_produks', function (Blueprint $table) {
            // $table->id();
            $table->string('id_produk',8);
            $table->string('nama_produk',50);
            $table->string('jenis_produk',50);
            $table->string('merk',20);
            $table->string('ukuran',30);
            $table->string('harga',70);
            $table->string('stok',50);
            $table->string('kategori',80);
            $table->text('deskripsi');
            $table->text('foto');
            $table->primary('id_produk');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('_produks');
    }
};
