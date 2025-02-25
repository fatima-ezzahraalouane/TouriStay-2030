<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use function Laravel\Prompts\table;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('listings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('owner_id')->constrained('owners')->onDelete('cascade');
            $table->string('title');
            $table->text('description');
            $table->string('country');
            $table->string('city');
            $table->decimal('price', 10, 2);
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
            $table->text('image'); // seule image pour carte
            $table->json('images')->nullable(); // plusieurs images pour modal details
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('listings');
    }
};
