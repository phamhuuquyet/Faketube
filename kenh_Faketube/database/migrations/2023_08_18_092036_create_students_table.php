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
        Schema::create('students', function (Blueprint $table) {
            $table->channelID();
            $table->string('channelName');
            $table->string('description');
            $table->string('subscribersCount')->nullable(1);
            $table->unsignedTinyInteger('URL')->nullable();
            $table->text('created_At')->nullable();
            $table->text('Updated_At')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
};
