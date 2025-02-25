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
        // Schema::create('owners', function (Blueprint $table) {
        //     $table->id();
        //     $table->timestamps();
        // });
        DB::statement("
            CREATE TABLE owners (
                id BIGSERIAL PRIMARY KEY,
                phone_number VARCHAR(20),
                CONSTRAINT fk_user FOREIGN KEY (id) REFERENCES users(id) ON DELETE CASCADE
            ) INHERITS (users);
        ");
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('owners');
    }
};
