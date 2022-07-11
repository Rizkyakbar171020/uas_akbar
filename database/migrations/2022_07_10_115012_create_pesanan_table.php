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
        Schema::create('pesanan', function (Blueprint $table) {
            $table->bigIncrements('id_pesanan');
            $table->foreignId('id_pel');
            $table->foreignId('id_ikan');
            $table->integer('banyak_ikan');
            $table->integer('status_pesanan')->default(1);
            $table->timestamps();
            $table->foreign('id_pel')
                ->references('id_pel')
                ->on('pelanggan');
            $table->foreign('id_ikan')
                ->references('id_ikan')
                ->on('ikan');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pesanan');
    }
};
