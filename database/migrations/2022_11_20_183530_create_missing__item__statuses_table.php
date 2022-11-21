<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMissingItemStatusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('missing__item__statuses', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('user_id')->nullable();
            $table->string('class')->nullable();
            $table->integer('room_id')->nullable();
            $table->integer('location_id')->nullable();
            $table->dateTime('attendence_collect_at')->nullable();
            $table->dateTime('attendence_return_at')->nullable();
            $table->dateTime('marker_return_at')->nullable();
            $table->dateTime('marker_collect_at')->nullable();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('missing__item__statuses');
    }
}
