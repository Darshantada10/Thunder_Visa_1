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
        Schema::create('contract_work_permit_visas', function (Blueprint $table) {
            $table->id();
                        
            $table->string('image');
            $table->string('title');
            $table->json('content');
            $table->json('points');
            $table->boolean('visible')->default(false)->comment('1=visible,0=not visible');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contract_work_permit_visas');
    }
};
