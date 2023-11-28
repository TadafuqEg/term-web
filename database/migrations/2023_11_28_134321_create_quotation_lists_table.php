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
        Schema::create('quotation_lists', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->enum('type',['normal','text','years','country','dropdown_menu'])->default('normal');

            $table->unsignedBigInteger('quotation_title_id');

            $table->foreign('quotation_title_id')
                ->references('id')
                ->on('quotation_titles')
                ->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('quotation_lists');
    }
};
