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
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->boolean('is_active')->default(false);
            $table->string('titleservice');
            $table->string('subtitleservice');
            $table->string('titleservice1');
            $table->string('subtitleservice1');
            $table->string('titleservice2');
            $table->string('subtitleservice2');
            $table->string('titleservice3');
            $table->string('subtitleservice3');
            $table->string('titleservice4');
            $table->string('subtitleservice4');
            $table->string('titleservice5');
            $table->string('subtitleservice5');
            $table->string('titleservice6');
            $table->string('subtitleservice6');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};
