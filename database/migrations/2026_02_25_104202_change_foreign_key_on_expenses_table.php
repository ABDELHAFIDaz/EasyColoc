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
        // Step 1: Drop constraint and rename the column
        Schema::table('expenses', function (Blueprint $table) {
            $table->renameColumn('colocation_id', 'category_id');
        });

        // Step 2: Apply the new constraint to the newly named column
        Schema::table('expenses', function (Blueprint $table) {
            $table->foreign('category_id')
                ->references('id')
                ->on('categories')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('expenses', function (Blueprint $table) {
            $table->dropForeign(['category_id']);
            $table->renameColumn('category_id', 'colocation_id');
            $table->foreign('colocation_id')->references('id')->on('colocations')->onDelete('cascade');
        });
    }
};
