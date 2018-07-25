<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangeColumnWidthOnPixelIntLogosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('testimonies', function (Blueprint $table) {
            $table->integer('width_on_pixel_int')->nullable()->change();
            $table->integer('height_on_pixel_int')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('testimonies', function (Blueprint $table) {
            //
        });
    }
}
