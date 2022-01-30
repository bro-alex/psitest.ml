<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTestResultesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('test_resultes', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->integer('pok')->nullable();
            $table->integer('unig')->nullable();
            $table->integer('nespr')->nullable();
            $table->integer('pred')->nullable();
            $table->integer('otverg')->nullable();

            $table->foreignId('result_user_id')->constrained('result_users')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('test_resultes');
    }
}
