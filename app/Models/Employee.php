<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Employee extends Authenticatable
{
    use Notifiable;

    protected $table = "employees";
    protected $guarded = [];
    protected $fillable = [
        'id',
        'welcomeNote',
        'status',
        'empCode',
        'empName',
        'nationality',
        'designation',
        'projectDepartmentNumber',
        'projectDepartmentName',
        'minimum',
        'maximum',
        'class',
        'jobFamily',
        'jobCode',
        'categoryPayroll',
        'empAcc',
        'joiningDate',
        'service',
        'birthDate',
        'age',
        'warning',
        'payType',
        'eligibility',
        'vacDays',
        'sector',
        'ticketAmount',
        'numTickets',
        'familyStatus',
        'settDate',
        'campedsc',
        'passportNo',
        'passportValidity',
        'visaNo',
        'visaExpiry',
        'visaType',
        'sponsor',
        'sex',
        'empStatus',
        'effectiveDate',
        'visaIssueDate',
        'emailWork',
        'mobileWork',
        'mobile',
        'finger',
        'medical',
        'dutyResumption',
        'hcCode',
        'hcCode',
        'hcExpDate',
        'agency',
        'basic',
        'hra',
        'ta',
        'fixedOt',
        'otherAllowance',
        'total',
        'image',
        'token',
        'password',
        'company_id',
        'mobile_new',
        'activation_token',
        'arabic_name',
        'arabic_designation',
        'arabic_nationality',
        'total_salary',
        'signature',
        'image',
        'view_all_notes_entities',
        'grade',
        'food',
        'oTMedgulf',
        'telephoneOT',
        'other',
        'pPCEDSC',
        'jLGC_EMPCARD_GRADE',
        'mOBIRANGE',
        'national_Add_Remarks',
        'national_Add_STS',
        'license',
        'cARVALID',
        'last_resump_Laeve',
        'leave_Entitl_Days',
        'leave_Settled_Date',
        'available_Employee_Leaves',
        'flight_Ticket_Sector',
        'available_Employee_Leaves',
        'job_Expire',
        'last_Date_Flight_Ticket'
    ];

    public function getCompanyAr()
    {
        $company = $this->company_id;
        if ($company == 1) {
            return 'شركة مدجلف للإنشاءات';
        } elseif ($company == 2) {
            return 'شركة تراجز للهندسة الكهربائية وتكييف الهواء';
        } else {
            return 'شركة الخدمات التجارية والتوكيلات المحدودة';

        }

    }
    public function isHasPermission($permission)
    {
        if ($permission == 'BookFlightTicket') {
            $permission = 'EmployeeRelation';
        }
        $permissions = UserPermission::where('permission', $permission)->where('employee_id', $this->id)->count();
        if ($permissions > 0) {
            return 1;
        } else {
            return 0;
        }

    }

}
