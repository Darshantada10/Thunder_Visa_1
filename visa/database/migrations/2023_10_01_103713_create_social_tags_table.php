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
        Schema::create('social_tags', function (Blueprint $table) {
            $table->id();
            
            $table->string('instagram');
            $table->string('facebook');
            $table->string('twitter');
            $table->string('youtube');
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
        Schema::dropIfExists('social_tags');
    }
};
