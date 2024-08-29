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
        Schema::table('order_items', function (Blueprint $table) {
            // Update the precision and scale for unit_amount and total_amount
            $table->decimal('unit_amount', 30, 4)->change();
            $table->decimal('total_amount', 30, 4)->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('order_items', function (Blueprint $table) {
            // Revert to the original precision and scale
            $table->decimal('unit_amount', 10, 2)->change();
            $table->decimal('total_amount', 10, 2)->change();
        });
    }
};
