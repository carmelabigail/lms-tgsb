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
        Schema::create('leave', function (Blueprint $table) {
            $table->id('id');
            $table->timestamps();
            $table->string('name');
            $table->string('position');
            $table->string('typeofleave');
            $table->date('date_start');
            $table->date('date_end');
            $table->date('date_return');
            $table->string('phone_address');
            $table->string('reason');
            $table->string('status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('leave');
    }
};
