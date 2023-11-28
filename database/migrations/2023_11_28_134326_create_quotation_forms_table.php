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
        Schema::create('quotation_forms', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('quotation_list_id');

            $table->foreign('quotation_list_id')
                ->references('id')
                ->on('quotation_lists')
                ->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('quotation_forms');
    }
};
