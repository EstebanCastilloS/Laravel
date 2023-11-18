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
        Schema::create('members', function (Blueprint $table) {
            $table->id();
            $table->string('full name', 255);
            $table->string('address', 255);
            $table->string('phone', 255);
            $table->date('birthdate');
            $table->string('gender');
            $table->string('email', 255)->unique();
            $table->enum('status', ['active', 'inactive'])->default('active');
            $table->string('ministry', 255);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('members');
    }
};
