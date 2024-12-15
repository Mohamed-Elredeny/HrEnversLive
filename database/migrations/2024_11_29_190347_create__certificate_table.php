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
        Schema::create('certificate', function (Blueprint $table) {
            $table->id();
            $table->string('ref')->nullable();
            $table->date('date_submit')->nullable();
            $table->date('review_date')->nullable();
            $table->string('review_name')->nullable();
            $table->string('review_remark')->nullable();
            $table->string('review_status')->nullable();
            $table->date('approval_date')->nullable();
            $table->string('approval_name')->nullable();
            $table->string('approval_remark')->nullable();
            $table->string('approval_status')->nullable();
            $table->unsignedBigInteger('certificateType_id')->nullable();
            $table->foreign('certificateType_id')->references('id')->on('certificate_type')->onDelete('cascade');
            $table->string('remark')->nullable();
            $table->unsignedBigInteger('Emp_id')->nullable();
            $table->foreign('Emp_id')->references('id')->on('employees')->onDelete('cascade');
            $table->string('embassy')->nullable();
            $table->string('returnReasons')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_certificate');
    }
};
