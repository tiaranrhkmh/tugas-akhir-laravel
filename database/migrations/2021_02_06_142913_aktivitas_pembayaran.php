<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AktivitasPembayaran extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('Aktivitas_Pembayaran', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('ID_Pembayaran');
            $table->string('Jumlah_Denda');
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
        //
        Schema::dropIfExists('Aktivitas_Pembayaran');
    }
}
