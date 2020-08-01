<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHeadreFootersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('headre_footers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('ownarName')->nullable();
            $table->string('ownerDepartment')->nullable();
            $table->string('mobile')->nullable();
            $table->string('address')->nullable();
            $table->string('copyright')->nullable();
            $table->tinyInteger('status')->nullable();
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
        Schema::dropIfExists('headre_footers');
    }
}
