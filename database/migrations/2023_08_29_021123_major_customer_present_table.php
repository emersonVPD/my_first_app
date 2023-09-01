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
        Schema::create('major_customer_presents', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('supplier_id');
            
            $table->string('mcp_name_1');
            $table->string('mcp_name_2')->nullable();
            $table->string('mcp_name_3')->nullable();

            $table->string('mcp_addrs_1');
            $table->string('mcp_addrs_2')->nullable();
            $table->string('mcp_addrs_3')->nullable();

            $table->integer('mcp_contact_1');
            $table->integer('mcp_contact_2')->nullable();
            $table->integer('mcp_contact_3')->nullable();

            $table->string('mcp_cont_person_1');
            $table->string('mcp_cont_person_2')->nullable();
            $table->string('mcp_cont_person_3')->nullable();

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
        Schema::dropIfExists('major_customer_presents');
    }
};
