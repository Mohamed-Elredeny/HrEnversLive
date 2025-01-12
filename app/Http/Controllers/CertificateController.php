<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\CertificatesType;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\Certificates;
use App\Models\Employee;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;




class CertificateController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $idd = Auth::guard('employee')->user()->id ?? null;
        $employee = Employee::find($idd);
        $certificate1 = DB::table('certificate')->where('review_status', '=', null)->get();
        $certificate2 = DB::table('certificate')->where('review_status', '=', 'ConfirmCertificate')->orWhere('approval_status', '=', 'Return To Sender')->get();
        $certificatesreview = $certificate1->count() + $certificate2->count();
        $certificatespending = DB::table('certificate')->where('review_status', '=', 'ConfirmCertificate')->where('approval_status', '=', null)->get();

        $certificatesreturn = DB::table('certificate')->where('approval_status', '=', 'Return To Sender')->get();
        $certificatesapproval = DB::table('certificate')->where('approval_status', '=', 'ConfirmCertificate')->get();
        $certificateapprovalcount = $certificatespending->count();
        $userpermission = DB::table('user_permissions')->where('employee_id', '=', $idd)->get() ?? null;
        $mycertificates = DB::table('certificate')->where('Emp_id', '=', $idd)->get();
        return view('Dashboard.employee.Personal_Certificate.index', ['mycertificates' => $mycertificates, "certificatesreview" => $certificatesreview, "certificateapprovalcount" => $certificateapprovalcount, 'employee' => $employee]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    public function storeEnglishcertificate(Request $request)
    {
        $request->validate([
            'item_id' => 'required|string', // Ensure item_id (ref) is present and is a string
            'TextareaRemarkCertificateen' => 'nullable|string|max:500', // Optional remark field with a maximum length
            'Embassy' => 'nullable|string|max:255', // Optional embassy field
        ], [
            'item_id.required' => 'Certificate Type is required.',
        ]);
//        CertificatesType::create([
//            'type'=>'EnglishCertificate'
//        ]);

        $id= Auth::guard('employee')->user()->id??null;
        $currentdate = now();

        try {
            Certificates::create([
                'ref' => $request->input('item_id'),
                'date_submit' => $currentdate,
                'review_date' => null,
                'review_name' => null,
                'review_remark' => null,
                'review_status'=> null,
                'approval_date' => null,
                'approval_name' => null,
                'approval_remark' => null,
                'approval_status'=> null,
                'certificateType_id'=>1,
                'remark' => $request->input('TextareaRemarkCertificateen') ,
                'Emp_id' => $id,
                'embassy'=>$request->input('Embassy')??null,
                'returnReasons' => null,
            ]);
        } catch (\Exception $e) {
            Log::error('Failed to insert certificate: ' . $e->getMessage());
//            return response()->json(['message' => 'Failed to insert certificate.'], 500);
            return redirect()->back()->with('errorcertificate', "Please error{{$e->getMessage()}}");
        }

        return redirect()->route('employee.index');
    }

    public function storeArabicCertificate(Request $request)
    {
        $id= Auth::guard('employee')->user()->id??null;
        $request->validate([
            'item_id_arabic' => 'required|string', // Ensure item_id_arabic (ref) is present and is a string
            'TextareaRemarkCertificate' => 'nullable|string|max:500', // Optional remark field with a maximum length

        ], [
        'item_id_arabic.required' => 'Certificate Type is required.',
        ]);
//        CertificatesType::create([
//            'type'=>'ArabicCertificate'
//        ]);
        $currentdate = now();
        try {

            Certificates::create([
                'ref' => $request->input('item_id_arabic'),
                'date_submit' => $currentdate,
                'review_date' => null,
                'review_name' => null,
                'review_remark' => null,
                'review_status'=> null,
                'approval_date' => null,
                'approval_name' => null,
                'approval_remark' => null,
                'approval_status'=> null,
                'certificateType_id'=>2,
                'remark' => $request->input('TextareaRemarkCertificate') ,
                'Emp_id' => $id,
                'embassy'=>$request->input('Embassy'),
                'returnReasons' => null,
            ]);
        } catch (\Exception $e) {
//            Log::error('Failed to insert certificate: ' . $e->getMessage());
            return redirect()->back()->with('errorcertificate', "Please error{{$e->getMessage()}}");
        }

        return redirect()->route('employee.index');
    }
    public function returncertificatereviewer(Request $request,$id)
    {
        $idd= Auth::guard('employee')->user()->id??null;

        $employee=Employee::find($idd);
        $currentdate = now();
        $certificat = Certificates::findOrFail($id);
        $certificat->review_name=$employee->empName;
        $certificat->review_status = 'Return To Sender';
        $certificat->returnReasons=$request->reason;

        $certificat->review_remark=$request->input('areaReasonSpecify');
        $certificat->review_date=$currentdate;
        $certificat->save();
        return redirect()->route('employee.index');
    }

    public function returncertificatereviewerapproval(Request $request,$id)
    {
        $idd= Auth::guard('employee')->user()->id??null;

        $employee=Employee::find($idd);
        $currentdate = now();
        $certificat = Certificates::findOrFail($id);
        $certificat->review_name=$employee->empName;
        $certificat->review_status = 'Return To Sender';
        $certificat->returnReasons=$request->reason;

        $certificat->review_remark=$request->input('areaReasonSpecifyrefuse');
        $certificat->review_date=$currentdate;
        $certificat->save();
        return redirect()->route('employee.index');
    }
    public function submitcertificatereview(Request $request,$id)
    {
        $idd= Auth::guard('employee')->user()->id??null;

        $employee=Employee::find($idd);
        $currentdate = now();
        $certificat = Certificates::findOrFail($id);
        $certificat->review_name=$employee->empName??"";
        $certificat->review_status = 'ConfirmCertificate';
        $certificat->review_remark =$request->input('areaReasonSpecify');

        $certificat->review_date=$currentdate;
        $certificat->save();
        return redirect()->route('employee.index');

    }
    public function submitcertificatereviewapproval(Request $request,$id){
        $idd= Auth::guard('employee')->user()->id??null;

        $employee=Employee::find($idd);
        $currentdate = now();
        $certificat = Certificates::findOrFail($id);
        $certificat->review_name=$employee->empName??"";
        $certificat->review_status = 'ConfirmCertificate';
        $certificat->review_remark =$request->input('areaReasonSpecifyreturn');
        $certificat->approval_status = null;
        $certificat->approval_remark =null;
        $certificat->review_date=$currentdate;
        $certificat->save();
        return redirect()->route('employee.index');

    }

public function Certificatecontent($type,$id)
{
        $currentYear = Carbon::now()->year;
        $idd = Auth::guard('employee')->user()->id ;
        $certificate = Certificates::find($id);
        $currentdate = Carbon::now();
        $employee = DB::table('employees')->where('id', '=', $certificate->Emp_id ?? "")->first();
        $certificatespending = DB::table('certificate')->where('Emp_id', '=', $id)->where('review_status', '=', null)->get();
        $certificatesreturn = DB::table('certificate')->where('Emp_id', '=', $id)->where('review_status', '=', 'Return To Sender')->get();
        $certificatesapproval = DB::table('certificate')->where('Emp_id', '=', $id)->where('review_status', '=', 'ConfirmCertificate')->get();

        if ($certificate->ref == "PERSONA LOAN" || $certificate->ref == "CREDIT CARD" || $certificate->ref == "VEHICLE LOAN")
        {
            return view('Dashboard.employee.Personal_Certificate.'.$type.'.en.loan', [ 'certificate' => $certificate, 'employee' => $employee,'currentuserid'=>$idd,'currentdate'=>$currentdate,'currentyear'=>$currentYear]);

        }
        elseif ($certificate->ref == "EMPLOYMENT CERTIFICATE TO EMBASSY") {

            return view('Dashboard.employee.Personal_Certificate.'.$type.'.en.embassy',[ 'certificate' => $certificate, 'employee' => $employee,'currentuserid'=>$idd,'currentdate'=>$currentdate,'currentyear'=>$currentYear]);
        }
        elseif ($certificate->ref == "CERTIFICATE WITHOUT SALARY" || $certificate->ref == "SALARY CERTIFICATE") {

            return view('Dashboard.employee.Personal_Certificate.'.$type.'.en.salary',[ 'certificate' => $certificate, 'employee' => $employee,'currentuserid'=>$id,'currentdate'=>$currentdate,'currentyear'=>$currentYear]);

        }
        elseif ($certificate->ref == "GATE PASS LOST") {

            return view('Dashboard.employee.Personal_Certificate.'.$type.'.ar.Gate_Pass_lost', [ 'certificate' => $certificate, 'employee' => $employee,'currentuserid'=>$id,'currentdate'=>$currentdate,'currentyear'=>$currentYear]);

        }
        elseif ($certificate->ref == "GATE PASS CANCELLATION") {

            return view('Dashboard.employee.Personal_Certificate.'.$type.'.ar.Gate_Pass_Cancellation', [ 'certificate' => $certificate, 'employee' => $employee,'currentuserid'=>$id,'currentdate'=>$currentdate,'currentyear'=>$currentYear]);

        }
        elseif ($certificate->ref == "EXPERIENCE CERTIFICATE") {

            return view('Dashboard.employee.Personal_Certificate.'.$type.'.ar.Experience_Certificate', [ 'certificate' => $certificate, 'employee' => $employee,'currentuserid'=>$id,'currentdate'=>$currentdate,'currentyear'=>$currentYear]);

        }
        elseif ($certificate->ref == "FAMILY VISIT FISA REQUEST") {

            return view('Dashboard.employee.Personal_Certificate.'.$type.'.ar.Family_Visit_visa_request', [ 'certificate' => $certificate, 'employee' => $employee,'currentuserid'=>$id,'currentdate'=>$currentdate,'currentyear'=>$currentYear]);

        }
        elseif ($certificate->ref == "FAMILY RESIDENCY VISA REQUEST") {

            return view('Dashboard.employee.Personal_Certificate.'.$type.'.ar.Family_Residency_visa_request', [ 'certificate' => $certificate, 'employee' => $employee,'currentuserid'=>$id,'currentdate'=>$currentdate,'currentyear'=>$currentYear]);

        }
        elseif ($certificate->ref == "QID LOST") {

            return view('Dashboard.employee.Personal_Certificate.'.$type.'.ar.QID_Lost', [ 'certificate' => $certificate, 'employee' => $employee,'currentuserid'=>$id,'currentdate'=>$currentdate,'currentyear'=>$currentYear]);
        }
        return view('Dashboard.employee.Personal_Certificate.'.$type.'.ar.QID_Lost', [ 'certificate' => $certificate, 'employee' => $employee,'currentuserid'=>$id,'currentdate'=>$currentdate,'currentyear'=>$currentYear]);


}

    public function returncertificateapproval(Request $request,$id)
    {
        $currentdate = now();
        $idd= Auth::guard('employee')->user()->id??null;

        $employee=Employee::find($idd);
        $certificat = Certificates::findOrFail($id);
        $certificat->approval_name=$employee->empName;
        $certificat->approval_status = 'Return To Sender';
        $certificat->returnReasons=$request->reason;
        $certificat->approval_remark=$request->input('areaReasonSpecify');
        $certificat->approval_date=$currentdate;
        $certificat->save();
        return redirect()->route('employee.index');
    }

    public function submitcertificateapproval(Request $request,$id)
    {

        $currentdate = now();
        $certificat = Certificates::findOrFail($id);
        $certificat->approval_status = 'ConfirmCertificate';
        $idd= Auth::guard('employee')->user()->id??null;

        $employee=Employee::find($idd);
        $certificat->approval_name=$employee->empName;
        $certificat->approval_remark=$request->input('areaReasonSpecify');
        $certificat->approval_date=$currentdate;
        $certificat->save();
        return redirect()->route('employee.index');

    }

    /**
     * Display the specified resource.
     */

    public function show(Request $request)
    {


        $id= Auth::guard('employee')->user()->id??null;

        $certificates = DB::table('certificate')->where('Emp_id','=',$id)->get();


//        foreach ($certificates as $certificate)
//        {
            $employee= DB::table('employees')->where('id','=',$id)->first();
//        }


        $currentdate=now();
        $certificatesPending = DB::table('certificate')
            ->where('Emp_id', '=', $id)
            ->where(function($query) {$query->where('approval_status','=',null)->orWhere('approval_status','=','Return To Sender');})
            ->where(function($query) {$query->where('review_status', '=', 'ConfirmCertificate')->orWhere('review_status');})->get();
        $certificatesreturn = DB::table('certificate')->where('Emp_id', '=', $id)->Where('review_status', '=', 'Return To Sender')->get();
        $certificatesapproval = DB::table('certificate')->where('Emp_id', '=', $id)->where('approval_status', '=', 'ConfirmCertificate')->get();

        return view('Dashboard.employee.Personal_Certificate.My_Certificates', ['certificates' => $certificates,'employee'=>$employee,'certificatesapproval'=>$certificatesapproval,'certificatesreturn'=>$certificatesreturn,'currentdate'=>$currentdate,'certificatespending'=>$certificatesPending]);
    }
    public function ApprovalCertificate (Request $request)
    {

            $id = Auth::guard('employee')->user()->id ?? null;
            $employ=Employee::find($id);
            $certificates = DB::table('certificate')->get();
            $employee=null;
            foreach ($certificates as $certificate) {
                $employee = DB::table('employees')->where('id', '=', $certificate->Emp_id ?? "")->get();
            }
            $certificatespending = DB::table('certificate')->where('review_status', '=', 'ConfirmCertificate')->where('approval_status', '=', null)->get();
            $certificatesreturn = DB::table('certificate')->where('approval_status', '=', 'Return To Sender')->get();
            $certificatesapproval = DB::table('certificate')->where('approval_status', '=', 'ConfirmCertificate')->get();
            return view('Dashboard.employee.Personal_Certificate.Approval_Certificates', ['employee' => $employee,'employ'=>$employ ,'certificates' => $certificates, 'certificatespending' => $certificatespending, 'certificatesreturn' => $certificatesreturn, 'certificatesapproval' => $certificatesapproval]);

        }
    public function CertificateApproval(Request $request)
    {

    }
    public function showcertificatereviewer()
    {
        $id= Auth::guard('employee')->user()->id??null;
        $employee=Employee::find($id);
        $certificates = DB::table('certificate')->get();
        $certificatespending = DB::table('certificate')->where('review_status','=',null)->get();
        $certificatesreturn = DB::table('certificate')->where('review_status','=','Return To Sender')->get();
        $certificatesreturnapproval = DB::table('certificate')->where('review_status','=','ConfirmCertificate')->where('approval_status','=','Return To Sender')->get();
        $certificatesapproval = DB::table('certificate')->where('review_status','=','ConfirmCertificate')->where(function($query) {$query->where('approval_status','=',null)->orWhere('approval_status','=','ConfirmCertificate');})->get();

        $currentdate=now();
        $employeepend=[];
        $employeereturn=[];
        $employeeapproval=[];
        $employeeapprovalreturn=[];

        foreach ($certificatesreturnapproval as $certificate) {
            $employee= DB::table('employees')->where('id','=',$certificate->Emp_id??"")->first();
            $employeeapprovalreturn[]=$employee;


        }


           foreach ($certificatespending as $certificate) {
             $employee= DB::table('employees')->where('id','=',$certificate->Emp_id??"")->first();
             $employeepend[]=$employee;


           }
        foreach ($certificatesreturn as $certificate) {
            $employee= DB::table('employees')->where('id','=',$certificate->Emp_id??"")->first();
            $employeereturn[]=$employee;

        }
        foreach ($certificatesapproval as $certificate) {
            $employee= DB::table('employees')->where('id','=',$certificate->Emp_id??"")->first();
            $employeeapproval[]=$employee;

        }

        return view('Dashboard.employee.Personal_Certificate.Review_Certificates', ['certificates' => $certificates,'employeepend'=>$employeepend,'employeereturn'=>$employeereturn,'employeeapproval'=>$employeeapproval,'currentdate'=>$currentdate,'certificatespending'=>$certificatespending,'certificatesreturn'=>$certificatesreturn,'certificatesapproval'=>$certificatesapproval,'certificatesreturnapproval'=>$certificatesreturnapproval,'employeeapprovalreturn'=>$employeeapprovalreturn,'employee'=>$employee]);

    }

    public function edit(string $id)
    {

    }

    public function update(Request $request, string $id)
    {

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}


