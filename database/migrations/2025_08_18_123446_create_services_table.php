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
            $table->string('title');               // service name/title
            $table->string('slug')->unique();      // SEO friendly URL
            $table->string('icon')->nullable();    // font-awesome icon class
            $table->string('image')->nullable();   // custom image path
            $table->text('short_description');     // short text for previews
            $table->longText('description')->nullable(); // detailed content
            $table->boolean('is_active')->default(true); // toggle visibility
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};
