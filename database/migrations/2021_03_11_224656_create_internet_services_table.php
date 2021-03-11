<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInternetServicesTable extends Migration
{
    public function up()
    {
        Schema::create('internet_services', function (Blueprint $table) {
            $table->id();
            $table->string('name', 30)->unique();
            $table->string('speed', 30)->required();
            $table->float('price')->required();
        });
    }

    public function down()
    {
        Schema::dropIfExists('internet_services');
    }
}
