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
        Schema::create('bucketlist_items', function (Blueprint $table) {
            $table->id();
            $table->string('title')->require();
            $table->string('description')->require();
            $table->integer('prioriteit')->require();
            $table->boolean('done');
            $table->integer('bucketlist_id');
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
        Schema::dropIfExists('bucketlist-items');
    }
};
