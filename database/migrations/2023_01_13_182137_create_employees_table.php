<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            
            $table->id();
            $table->string('name')->uniqued();
            $table->string('first_name');
            $table->string('last_name');
            $table->date('start_date');
           
            $table->unsignedBigInteger("position_id");
            $table->foreign("position_id")->references("id")->on("positions");

            $table->unsignedBigInteger("company_id");
            $table->foreign("company_id")->references("id")->on("companies"); $table->id();
            $table->string('name')->uniqued();
            $table->string('first_name');
            $table->string('last_name');
            $table->date('start_date');
            $table->integer('position_id')->unsigned();
            $table->integer('company_id')->unsigned();
            $table->foreign('position_id')->references('id')->on('positions')
            ->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('company_id')->references('id')->on('companies')
            ->onUpdate('cascade')->onDelete('cascade');
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
    }
};
