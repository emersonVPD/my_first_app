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
        Schema::create('business_registries', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('supplier_id');
            
            $table->string('br_permit_no_1');
            $table->string('br_permit_no_2')->nullable();
            $table->string('br_permit_no_3')->nullable();
            $table->string('br_permit_no_4')->nullable();

            $table->date('br_date_issued_1');
            $table->date('br_date_issued_2')->nullable();
            $table->date('br_date_issued_3')->nullable();
            $table->date('br_date_issued_4')->nullable();

            $table->date('br_expi_date_1');
            $table->date('br_expi_date_2')->nullable();
            $table->date('br_expi_date_3')->nullable();
            $table->date('br_expi_date_4')->nullable();

            $table->string('permit_file_1')->nullable();
            $table->string('permit_file_2')->nullable();
            $table->string('permit_file_3')->nullable();
            $table->string('permit_file_4')->nullable();
            // $table->string('file');

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
        Schema::dropIfExists('business_registries');
    }
};
