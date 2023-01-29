<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->foreignId('team_id')->constrained('teams')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('user_role_id')->constrained('user_roles')->onUpdate('cascade')->onDelete('cascade');
            $table->string('name');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
