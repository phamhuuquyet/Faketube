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
        Schema::create('table', function (Blueprint $table) {
            $table->id(); //// tự động tạo trường id
            $table->string('name');
            $table->string('slug');
            $table->string('ing')->nullable(1);
            $table->unsignedTinyInteger('status')->nullable();
            $table->text('description')->nullable();
            $table->timestamps(); // tự đọng tạo 2 trường
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('table');
    }
};
