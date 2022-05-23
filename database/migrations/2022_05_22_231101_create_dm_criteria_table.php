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
        Schema::create('dm_criteria', function (Blueprint $table) {
            $table->id();
            $table->string('criteria_code', 10);
            $table->unsignedBigInteger('dm_id');
            $table->foreign('dm_id')->references('id')->on('dm');
            $table->string('attribute', 10);
            $table->string('description');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dm_criteria');
    }
};
