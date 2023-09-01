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
        Schema::create('major_3_products', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('supplier_id');
            
            $table->string('m3p_company_1');
            $table->string('m3p_company_2')->nullable();
            $table->string('m3p_company_3')->nullable();

            $table->string('m3p_prod_type_1');
            $table->string('m3p_prod_type_2')->nullable();
            $table->string('m3p_prod_type_3')->nullable();

            $table->string('m3p_brand_name_1');
            $table->string('m3p_brand_name_2')->nullable();
            $table->string('m3p_brand_name_3')->nullable();

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
        Schema::dropIfExists('major_3_products');
    }
};
