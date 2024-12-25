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
        Schema::create('leaves_types', function (Blueprint $table) {
            $table->id();

            $table->string('name');
            //all or specific type
            $table->string('employee_category')->default('employee');
            $table->double('joining_days')->default(0);
            $table->double('quantity')->default(0);
            $table->string('status')->default('active');

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
        Schema::dropIfExists('leaves_types');
    }
};
