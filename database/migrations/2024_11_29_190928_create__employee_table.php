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
                $table->string('status',100)->nullable();
                $table->string('empCode',100)->nullable();
                $table->string('empName',100)->nullable();
                $table->string('nationality',100)->nullable();
                $table->string('designation',100)->nullable();
                $table->string('projectDepartmentNumber',100)->nullable();
                $table->string('projectDepartmentName',100)->nullable();
                $table->string('minimum',100)->nullable();
                $table->string('maximum',100)->nullable();
                $table->string('class',100)->nullable();
                $table->string('jobFamily',100)->nullable();
                $table->string('jobCode',100)->nullable();
                $table->string('categoryPayroll',100)->nullable();
                $table->string('empAcc',100)->nullable();
                $table->string('joiningDate',100)->nullable();
                $table->string('service',100)->nullable();
                $table->string('birthDate',50)->nullable();
                $table->string('age',50)->nullable();
                $table->longText('warning')->nullable();
                $table->string('payType',100)->nullable();
                $table->string('eligibility',100)->nullable();
                $table->string('vacDays',100)->nullable();
                $table->string('sector',100)->nullable();
                $table->string('ticketAmount',100)->nullable();
                $table->string('numTickets',100)->nullable();
                $table->string('familyStatus',100)->nullable();
                $table->string('settDate',100)->nullable();
                $table->string('campedsc',100)->nullable();
                $table->string('passportNo',100)->nullable();
                $table->string('passportValidity',100)->nullable();
                $table->string('visaNo',100)->nullable();
                $table->string('visaExpiry',100)->nullable();
                $table->string('visaType',100)->nullable();
                $table->string('sponsor',100)->nullable();
                $table->string('sex',100)->nullable();
                $table->string('empStatus',100)->nullable();
                $table->string('effectiveDate',100)->nullable();
                $table->string('visaIssueDate')->nullable();
                $table->string('emailWork',100)->nullable();
                $table->string('mobileWork',100)->nullable();
                $table->string('mobile',100)->nullable();
                $table->string('finger')->nullable();
                $table->string('medical',100)->nullable();
                $table->string('dutyResumption')->nullable();
                $table->string('hcCode',100)->nullable();
                $table->string('hcExpDate',100)->nullable();
                $table->string('agency',100)->nullable();
                $table->string('basic',100)->nullable();
                $table->string('hra',100)->nullable();
                $table->string('ta',100)->nullable();
                $table->string('fixedOt')->nullable();
                $table->string('otherAllowance',50)->nullable();
                $table->string('total',100)->nullable();
                $table->string('password')->nullable();
                $table->string('image',100)->nullable();
                $table->string('mobile_new',50)->nullable();

                $table->timestamps();
                $table->string('company_id',20)->nullable();
                $table->string( 'activation_token')->nullable();
                $table->string('arabic_name',100)->nullable();
                $table->string('arabic_designation',100)->nullable();
                $table->string( 'arabic_nationality')->nullable();
                $table->string('total_salary')->nullable();
                $table->string('welcomeNote')->nullable();
                $table->string('signature')->nullable();
                $table->string('grade')->nullable();
                $table->string('food')->nullable();
                $table->string('oTMedgulf')->nullable();
                $table->string('telephoneOT',50)->nullable();
                $table->string('other')->nullable();
                $table->string('pPCEDSC')->nullable();
                $table->string('jLGC_EMPCARD_GRADE')->nullable();
                $table->string('mOBIRANGE')->nullable();
                $table->string('national_Add_Remarks')->nullable();
                $table->string('national_Add_STS')->nullable();
                $table->string('license')->nullable();
                $table->string('cARVALID')->nullable();
                $table->string('last_resump_Laeve')->nullable();
                $table->string('leave_Entitl_Days')->nullable();
                $table->string('leave_Settled_Date')->nullable();
                $table->string('leave_Settled_Date_generated')->nullable();
                $table->string('flight_Ticket_Sector')->nullable();
                $table->string('available_Employee_Leaves')->nullable();
                $table->string('job_Expire')->nullable();
                $table->string('last_Date_Flight_Ticket')->nullable();
                $table->string('view_all_notes_entities')->nullable();
                $table->string('deductionDaysType')->nullable();

            });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employee');
    }
};
