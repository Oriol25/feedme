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
        Schema::create('product', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->string('quantity');
            $table->string('EAN')->unique();
            $table->unsignedBigInteger('nutriscore_grade_id');
            $table->foreign('nutriscore_grade_id')
                    -> references('id')
                    -> on('nutriscore_grade');
            $table->unsignedBigInteger('nova_group_id');
            $table->foreign('nova_group_id')
                    -> references('id')
                    -> on('nova_group');
            $table->string('image');
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
        Schema::dropIfExists('product');
    }
};
