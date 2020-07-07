<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetalleAbonoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle_abono', function (Blueprint $table) {
            $table->increments('id');
            $table->text('cultivo');
            $table->text('dosis');
            $table->unsignedInteger('insumo_id');
            $table->foreign('insumo_id')->references('id')
                ->on('insumo')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detalle_abono');
    }
}
