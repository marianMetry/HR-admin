<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmplyoeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('emplyoees', function (Blueprint $table) {
            $table->id();
            $table->string('firstName');
            $table->string('secondName');
            $table->string('familyName');
            $table->string('phone')->unique()->nullable();
            $table->string('email')->unique();
            $table->string('address');
            $table->double('salary');
            $table->boolean('logIn');
            $table->boolean('medicalInsuranse');
            $table->string('NumberInsurance');
            $table->unsignedBigInteger('department_id')->nullable();
            $table->string('position');
            $table->string('card')->default('nationalId');
            $table->string('ID_card');
            $table->time('attend_at')->default('8');
            $table->time('out_at')->nullable();
            // $table->date('start_contract_from');
            // $table->date('end_contarct_to')->nullable();
            $table->string('password')->nullable();
            $table->integer('vacations_balance');
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
        Schema::dropIfExists('emplyoees');
    }
}
