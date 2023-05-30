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
        Schema::create('service__orders', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('vehiclePlate')->char(7);
            $table->string('entryDateTime')->datetime();
            $table->string('exitDateTime')->datetime()->DEFAULT('0001-01-01 00:00:00');
            $table->string('priceType')->varchar(55)->DEFAULT()->NULL;
            $table->string('price')->decimal(12,2)-> DEFAULT('0.00');
            $table->unsignedBigInteger('userId');
            $table->uuid('uuid');
            $table->string('url');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('service_orders');
    }
};
