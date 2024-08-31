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
        Schema::create('_emp', function (Blueprint $table) {
            $table->id("Emp_Id");
            $table->string("Name",100);
            $table->string("Email",100);
            $table->string("Phone",10);
            $table->string("Addr",100);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_emp');
    }
};
