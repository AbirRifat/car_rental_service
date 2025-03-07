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
    Schema::table('rentals', function (Blueprint $table) {
        $table->enum('status', ['Processing', 'Approved', 'Ongoing', 'Completed', 'Canceled'])
              ->default('Processing'); // Set default status to 'Processing'
    });
}

/**
 * Reverse the migrations.
 */
public function down(): void
{
    Schema::table('rentals', function (Blueprint $table) {
        $table->dropColumn('status');
    });
}
};
