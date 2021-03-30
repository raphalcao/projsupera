<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVehiclesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('vehicle_type', 20);
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('maintenance_id');
            $table->string('automakers', 35)->nullable();
            $table->string('model', 150)->nullable();
            $table->string('year', 4)->nullable();
            $table->string('color', 20)->nullable();
            $table->integer('odometer')->nullable();
            $table->string('chassi', 45)->nullable();
            $table->string('plate', 10);
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::table('vehicles', function (Blueprint $table) {
            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');
        });

       
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vehicles');
    }
}
