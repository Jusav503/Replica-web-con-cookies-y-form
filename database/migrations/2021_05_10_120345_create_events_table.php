<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title',255);
            $table->string('subtitle',255);
            $table->date('date');
            $table->string('city',255);
            $table->string('province',255);
            $table->longText('description');
            $table->string('organizer_name',255);
            $table->string('organizer_phone',15);
            $table->string('organizer_email',255);
            $table->string('organizer_website',255);
            $table->tinyInteger('active');
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
        Schema::dropIfExists('events');
    }
}
