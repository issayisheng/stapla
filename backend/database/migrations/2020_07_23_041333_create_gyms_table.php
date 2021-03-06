<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGymsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gyms', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('close_id');
            $table->uuid('owner_id');
            $table->string('name');
            $table->string('address');
            // MEMO: ジム固有の電話番号がある場合。なければオーナーの電話番号を表示。
            $table->string('tel')->nullable();
            $table->string('gym_facility')->nullable();
            $table->string('picture')->nullable();
            $table->dateTime('mon_opening_started')->nullable();
            $table->dateTime('mon_opening_ended')->nullable();
            $table->dateTime('tue_opening_started')->nullable();
            $table->dateTime('tue_opening_ended')->nullable();
            $table->dateTime('wed_opening_started')->nullable();
            $table->dateTime('wed_opening_ended')->nullable();
            $table->dateTime('thu_opening_started')->nullable();
            $table->dateTime('thu_opening_ended')->nullable();
            $table->dateTime('fri_opening_started')->nullable();
            $table->dateTime('fri_opening_ended')->nullable();
            $table->dateTime('sut_opening_started')->nullable();
            $table->dateTime('sut_opening_ended')->nullable();
            $table->dateTime('sun_opening_started')->nullable();
            $table->dateTime('sun_opening_ended')->nullable();
            $table->dateTime('holi_opening_started')->nullable();
            $table->dateTime('holi_opening_ended')->nullable();
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
        Schema::dropIfExists('gyms');
    }
}
