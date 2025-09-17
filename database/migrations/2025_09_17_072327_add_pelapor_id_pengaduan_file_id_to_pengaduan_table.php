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
        Schema::table('pengaduan', function (Blueprint $table) {
            $table->foreignId('pelapor_id')
                  ->nullable() 
                  ->constrained('pelapor')
                  ->onDelete('cascade');

            $table->foreignId('pengaduan_file_id')
                  ->nullable()
                  ->constrained('pengaduan_file')
                  ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('pengaduan', function (Blueprint $table) {
            $table->dropForeign(['pelapor_id']);
            $table->dropColumn('pelapor_id');

            $table->dropForeign(['pengaduan_file_id']);
            $table->dropColumn('pengaduan_file_id');
        });
    }
};
