<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('order_product', function (Blueprint $table) {
            $table->id();
            $table->string('no_invoice');
            $table->timestamp('tgl_order1')->nullable();
            $table->timestamp('tgl_order2')->nullable();
            $table->timestamp('tgl_order3')->nullable();
            $table->timestamp('tgl_order4')->nullable();
            $table->timestamp('tgl_order5')->nullable();
            $table->string('name');
            $table->string('no_hp');
            $table->string('detail_order');
            $table->string('no_resi')->nullable();
            $table->integer('tahap')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_product');
    }
};
