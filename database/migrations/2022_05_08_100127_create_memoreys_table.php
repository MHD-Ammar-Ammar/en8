<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMemoreysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('memoreys', function (Blueprint $table) {
            $table->id();

            $table->foreignId('inv_id')->references('id')->on('inverters')->onUpdate('cascade')->onDelete('cascade');

            //
            $table->string('device_sn');
            $table->smallInteger('grid_voltage');
            $table->smallInteger('grid_frequency');
            $table->smallInteger('ac_output_voltage');
            $table->smallInteger('ac_output_frequency');
            $table->smallInteger('ac_output_apparent_power');
            $table->smallInteger('ac_output_apparent_active');

            //
            $table->smallInteger('output_load_percent');
            $table->smallInteger('bus_voltage');
            $table->smallInteger('battery_voltage');
            $table->smallInteger('battery_charging_current');
            $table->smallInteger('inverter_heat_sink_temperature');

            // Rssi
            $table->float('rssi', 8, 2);

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
        Schema::dropIfExists('memoreys');
    }
}
