<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('internet_service_id')->nullable();
            $table->foreign('internet_service_id')->references('id')->on('internet_services')->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedBigInteger('phone_service_id')->nullable();
            $table->foreign('phone_service_id')->references('id')->on('phone_services')->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedBigInteger('cable_service_id')->nullable();
            $table->foreign('cable_service_id')->references('id')->on('cable_services')->onDelete('cascade')->onUpdate('cascade');
            $table->float('price')->required();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('services');
    }
}
