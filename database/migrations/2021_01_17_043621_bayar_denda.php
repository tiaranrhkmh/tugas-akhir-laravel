<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class BayarDenda extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('bayar_denda', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('Barcode');
            $table->datetime('Tanggal_Pembayaran');
            $table->datetime('Payment_due');
            $table->string('Payment_Status');
            $table->decimal('Jumlah_Denda')->default(0);
            $table->text('note')->nullable();
            $table->string('customer_first_name');
            $table->string('NIM');
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
        Schema::dropIfExists('bayar_denda');
    }
}
