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
        Schema::table('schedules', function (Blueprint $table) {
            // Nombre del campo - nombre de la tabla
            // se crea el campo y se crea la relación
            $table->foreignId('route_id')->constrained('paths');
            $table->foreignId('truck_id')->constrained('trucks');
            $table->foreignId('employee_id')->constrained('employees');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('paths', function (Blueprint $table) {
            //borrar el campo y la relación
            $table->dropConstrainedForeignId('route_id');
        });
    }
};
