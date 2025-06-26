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
        Schema::create('ri_faqs', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('faq_type_id');
            $table->string('question');
            $table->string('answer');
            $table->timestamps();

            $table->foreign('faq_type_id')->references('id')->on('ri_faq_types')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ri_faqs');
    }
};
