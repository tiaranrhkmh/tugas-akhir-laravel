<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookReturnsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('book_returns', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('user_id');
            $table->integer('book_id');
            $table->string('ID_Pembayaran')->nullable();
            $table->integer('NIM');
            $table->string('name');
            $table->string('Jurusan_Fakultas');
            $table->string('Angkatan');
            $table->string('Barcode');
            $table->string('updated_at')->nullable();
            $table->string('payment_token')->nullable();
            $table->string('payment_url')->nullable();
            $table->string('Info_Buku')->nullable();
            $table->datetime('Tanggal_Peminjaman');
            $table->datetime('Tanggal_Pengembalian');
            $table->decimal('Jumlah_Denda',16,2)->default(0);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('book_returns');
    }
}
