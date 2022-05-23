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
        Schema::create('sintesis_dm', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('dm_id');
            $table->foreign('dm_id')->on('dm')->references('id');
            $table->string('col_criteria',10);
            $table->string('row_criteria', 10);
            $table->double('amount');
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
        Schema::dropIfExists('sintesis_dm');
    }
};
