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
        Schema::create('principal_banks', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('supplier_id');

            $table->string('pb_banks_1');
            $table->string('pb_banks_2')->nullable();
            $table->string('pb_banks_3')->nullable();

            $table->string('pb_cont_officer_1');
            $table->string('pb_cont_officer_2')->nullable();
            $table->string('pb_cont_officer_3')->nullable();

            $table->integer('pb_tel_no_1');
            $table->integer('pb_tel_no_2')->nullable();
            $table->integer('pb_tel_no_3')->nullable();

            $table->foreign('supplier_id')->references('id')->on('suppliers')->cascadeOnUpdate()->cascadeOnDelete();
            $table->softDeletes();
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('principal_banks');
    }
};
