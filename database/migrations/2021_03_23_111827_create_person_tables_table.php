<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonTablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('person_tables', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->longText('address');
            $table->bigInteger('phone_number');
            $table->string('email')->unique();
            $table->string('gender');
            $table->string('check')->default('0');
            $table->timestamps();
        });
    }

    /**w
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('person_tables');
    }
}
