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
        Schema::create('employees', function (Blueprint $table) {
            $table->increments('id');
            $table->date('start_date');
            $table->string('payrollNo');
            $table->string('employee_name');
            $table->string('employee_phone');
            $table->string('employee_email');
            $table->string('id_number');
            $table->string('department');
            $table->string('nhif');
            $table->string('nssf');
            $table->integer('leave_balance');
            $table->string('monthly_allowance');
            $table->integer('gross_salary');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
