<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string("company", 30);
            $table->string("from", 30);
            $table->string("destination", 30);
            $table->dateTime("start_time");
            $table->dateTime("stop_time");
            $table->string("code", 12);
            $table->integer("wagons")->unsigned();
            $table->boolean("on_time")->default(true);
            $table->boolean("deleted")->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trains');
    }
};
