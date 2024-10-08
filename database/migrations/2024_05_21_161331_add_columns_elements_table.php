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
      Schema::table('elements', function (Blueprint $table) {
        $table->float('weight_per_unit')->nullable()->change();
        $table->unsignedTinyInteger('nds_value_id')->nullable();
        $table->dropColumn('nds');
      });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
      Schema::table('elements', function (Blueprint $table) {
        $table->dropColumn('weight_per_unit');
        $table->dropColumn('nds_value_id');
      });
    }
};
