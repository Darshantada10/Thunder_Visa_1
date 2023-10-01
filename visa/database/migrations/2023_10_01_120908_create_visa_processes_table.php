<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Foundation\Testing\DatabaseMigrations;

return new class extends Migration
{
    use DatabaseMigrations;

    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('visa_processes', function (Blueprint $table) {
            $table->id();
            
            $table->string('point1');
            $table->string('point2');
            $table->string('point3');
            $table->string('heading1');
            $table->string('heading2');
            $table->string('heading3');
            $table->boolean('visible')->default(false)->comment('1=visible,0=not visible');

            $table->index('visible'); 

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('visa_processes');
    }
};
