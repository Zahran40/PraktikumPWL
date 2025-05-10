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
        Schema::create('hari', function (Blueprint $table) {
            $table->id("id");
            $table->date("tanggal");
            $table->string("task",100);
        });
    }

    
    public function down(): void
    {
        Schema::dropIfExists('hari');
    }
};
