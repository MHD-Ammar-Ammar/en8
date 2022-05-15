<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('logs', function (Blueprint $table) {
            $table->id();
            // $table->unsignedInteger('inv_id');
            // $table->foreignId('inv_id')->references('id')->on('inverters')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('inv_status')->references('id')->on('memoreys')->onUpdate('cascade')->onDelete('cascade');

            $table->enum('com_status', ['0', '1']);


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
        Schema::dropIfExists('logs');
    }
}
