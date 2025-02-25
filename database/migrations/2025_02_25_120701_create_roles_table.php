<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        DB::statement("CREATE TYPE role_user AS ENUM ('Admin', 'Touriste', 'Propriétaire')");

        Schema::create('roles', function (Blueprint $table) {
            $table->id();
            $table->enum('name_user', ['Admin', 'Touriste', 'Propriétaire'])->unique();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('roles');

        DB::statement("DROP TYPE role_user");
    }
};
