<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RiwayatPembayaran extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('Midtrants', function (Blueprint $table){
            $table->bigIncrements('id');
            $table->string('number')->unique();
            $table->decimal('amount',16,2)->default();
            $table->string('method');
            $table->string('token')->nullable();
            $table->json('payloads')->nullable();
            $table->string('payment_type')->nullable();
            $table->string('va_number')->nullable();
            $table->string('vendor_name')->nullable();
            $table->string('biller_code')->nullable();
            $table->string('biller_key')->nullable();
            $table->softDeletes();
            $table->timestamps();

            $table->index('number');
            $table->index('method');
            $table->index('token');
            $table->index('payment_type');
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
        Schema::dropIfExists('Midtrans');
    }
}
