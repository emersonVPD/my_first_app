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
        Schema::create('suppliers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('datesub');
            $table->string('company_name');
            $table->string('company_addr');
            $table->string('company_phone');
            $table->string('plant_ware');
            $table->string('fax_no');
            $table->string('email');
            $table->string('tob');
            $table->string('auth_capital');
            $table->integer('yrs_business');
            $table->string('nature_business');
            $table->string('prod_lines');
            $table->string('src_materials');
            $table->string('principal_addrs');

            // $table->string('major_customer_present');
            // $table->string('principal banks');
            // $table->string('3_major_products');
            // $table->string('business_registry');

            $table->string('terms_payment');
            $table->string('others');
            $table->float('credit_amount');
            $table->integer('no_of_vehicle');

            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('suppliers');
    }
};
