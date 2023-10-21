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
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('meta_description')->nullable();
            //$table->string('keywords')->nullable();
            $table->string('slug')->unique();
            //$table->string('canonical_url')->nullable();
            $table->mediumText('body')->nullable();
            $table->string('status')->default('draft');
            $table->foreignId('user_id')->constrained()->nullable()->onDelete('cascade');
            $table->foreignId('category_id')->constrained()->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('articles');
    }
};
