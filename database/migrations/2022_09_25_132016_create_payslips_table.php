<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePayslipsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payslips', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('payroll_id')->nullable();
            $table->unsignedBigInteger('employee_id')->nullable();
            $table->string('present')->nullable(); //Employee's days of present
            $table->string('absent')->nullable();  //Employee's days of absences
            $table->string('salary')->nullable(); //salary
            $table->string('allowance_amount')->nullable(); //Total Amount of the Employee's Allowance
            $table->json('allowances')->nullable();//Employee's Allowance JSON Data
            $table->string('deduction_amount')->nullable(); //Total Amount of the Employee's deductions
            $table->json('deductions')->nullable();//Employee's deductions JSON Data
            $table->string('net')->nullable();     //Employee's NET Income

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('payslips');
    }
}
