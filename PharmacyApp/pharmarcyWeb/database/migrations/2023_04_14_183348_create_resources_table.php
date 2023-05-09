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
        Schema::create('resources', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("ville");
            $table->string("address");
            $table->text("description");
            $table->string("latitude")->nullable();;
            $table->string("longitude")->nullable();;
            $table->tinyInteger("permanent")->default(0);
            $table->string("phone1")->nullable();
            $table->string("phone2")->nullable();
            $table->string("website")->nullable();
            $table->string("google_maps")->nullable();
            $table->string("reference")->nullable();
            $table->tinyInteger("active")->default(1); // 1 = active , 0 = Inactive
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pharmacies');
    }
};
