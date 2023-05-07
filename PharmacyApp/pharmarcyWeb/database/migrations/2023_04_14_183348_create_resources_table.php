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
            $table->float("latitude");
            $table->float("longtiude");
            $table->tinyInteger("permanent")->default(0);
            $table->text("description");
            $table->string("address");
            $table->string("phone1");
            $table->string("phone2");
            $table->string("website");
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
