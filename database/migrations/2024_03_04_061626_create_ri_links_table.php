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
        Schema::create('ri_links', function (Blueprint $table) {
            $table->id();
            $table->string('name', 255);
            $table->string('url', 100)->nullable();
            $table->string('target', 100);
            $table->string('group', 100);
            $table->string('type', 100)->nullable()->comment('Distinguish between Link and Collection. Value collection|null');
            $table->string('collection_id', 100)->nullable()->comment('Collection\'s ID');
            $table->tinyInteger('status')->default(0);
            $table->integer('sort')->default(0);
            $table->timestamps();

            $table->foreign('group')->references('code')->on('ri_link_group')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ri_links');
    }
};
