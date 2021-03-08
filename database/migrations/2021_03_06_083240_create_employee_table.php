<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       
    Schema::create('employees', function($table) {
        $table->engine = "InnoDB";
        $table->id();
        $table->string('first_name');
        $table->string('last_name');
        $table->unsignedInteger('Company')->nullable();
        $table->string('email');
        $table->string('phone');
        $table->timestamps();
    });

   Schema::table('employees', function($table) {
       $table->foreign('Company')->references('id')->on('company')->onDelete('set null');
   });

 }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employees');
        $table->dropForeign(['Company']);
    }
}
