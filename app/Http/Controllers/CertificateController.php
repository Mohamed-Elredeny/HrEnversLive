<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\CertificatesType;
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
        //
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
//        CertificatesType::create([
//            'type'=>'EnglishCertificate'
//        ]);
        $id= Auth::guard('employees')->user()->id??null;
        $currentdate = now();
//$employees=Employee::find($id);
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
                'remark' => $request->input('TextareaRemarkCertificate')??"" ,
                'Emp_id' => $id,
                'embassy'=>$request->input('Embassy')??null,
                'returnReasons' => null,
            ]);
        } catch (\Exception $e) {
            Log::error('Failed to insert certificate: ' . $e->getMessage());
//            return response()->json(['message' => 'Failed to insert certificate.'], 500);
            return redirect()->back()->with('errorcertificate', "Please error{{$e->getMessage()}}");
        }

        return redirect()->route('employees.index');
    }

    public function storeArabicCertificate(Request $request)
    {
        $id= Auth::guard('employees')->user()->id??null;

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
                'remark' => $request->input('TextareaRemarkCertificate')??"" ,
                'Emp_id' => $id,
                'embassy'=>$request->input('Embassy'),
                'returnReasons' => null,
            ]);
        } catch (\Exception $e) {
//            Log::error('Failed to insert certificate: ' . $e->getMessage());
            return redirect()->back()->with('errorcertificate', "Please error{{$e->getMessage()}}");
        }

        return redirect()->route('employees.index');
    }
    public function returncertificatereviewer(Request $request,$id)
    {
        $idd= Auth::guard('employees')->user()->id??null;

        $employee=Employee::find($idd);
        $currentdate = now();
        $certificat = Certificates::findOrFail($id);
        $certificat->review_name=$employee->empName;
        $certificat->review_status = 'Return To Sender';
        $certificat->returnReasons=$request->reason;

        $certificat->review_remark=$request->input('areaReasonSpecify');
        $certificat->review_date=$currentdate;
        $certificat->save();
        return redirect()->route('employees.index');
    }
    public function submitcertificatereview(Request $request,$id)
    {
        $idd= Auth::guard('employees')->user()->id??null;

        $employee=Employee::find($idd);
        $currentdate = now();
        $certificat = Certificates::findOrFail($id);
        $certificat->review_name=$employee->empName??"";
        $certificat->review_status = 'ConfirmCertificate';
        $certificat->review_remark =$request->input('areaReasonSpecify');
        $certificat->review_date=$currentdate;
        $certificat->save();
        return redirect()->route('employees.index');

    }

    public function returncertificateapproval(Request $request,$id)
    {
        $currentdate = now();
        $idd= Auth::guard('employees')->user()->id??null;

        $employee=Employee::find($idd);
        $certificat = Certificates::findOrFail($id);
        $certificat->approval_name=$employee->empName;
        $certificat->approval_status = 'Return To Sender';
        $certificat->returnReasons=$request->reason;
        $certificat->approval_remark=$request->input('areaReasonSpecify');
        $certificat->approval_date=$currentdate;
        $certificat->save();
        return redirect()->route('employees.index');
    }

    public function submitcertificateapproval(Request $request,$id)
    {

        $currentdate = now();
        $certificat = Certificates::findOrFail($id);
        $certificat->approval_status = 'ConfirmCertificate';
        $idd= Auth::guard('employees')->user()->id??null;

        $employee=Employee::find($idd);
        $certificat->approval_name=$employee->empName;
        $certificat->approval_remark=$request->input('areaReasonSpecify');
        $certificat->approval_date=$currentdate;
        $certificat->save();
        return redirect()->route('employees.index');

    }

    /**
     * Display the specified resource.
     */

    public function show(Request $request)
    {


        $id= Auth::guard('employees')->user()->id??null;

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

        return view('Dashboard.employees.Personal_Certificate.My_Certificates', ['certificates' => $certificates,'employees'=>$employee,'certificatesapproval'=>$certificatesapproval,'certificatesreturn'=>$certificatesreturn,'currentdate'=>$currentdate,'certificatespending'=>$certificatesPending]);
    }
    public function showcertificatereviewer()
    {
        $id= Auth::guard('employees')->user()->id??null;
        $certificates = DB::table('certificate')->get();
        $certificatespending = DB::table('certificate')->where('review_status','=',null)->get();
        $certificatesreturn = DB::table('certificate')->where('review_status','=','Return To Sender')->get();
        $certificatesapproval = DB::table('certificate')->where('review_status','=','ConfirmCertificate')->get();
        $currentdate=now();
        $employeepend=[];
        $employeereturn=[];
        $employeeapproval=[];
           foreach ($certificatespending as $certificate) {
             $employee= DB::table('employees')->where('id','=',$certificate->Emp_id??"")->get();
             $employeepend[]=$employee;


           }
        foreach ($certificatesreturn as $certificate) {
            $employee= DB::table('employees')->where('id','=',$certificate->Emp_id??"")->get();
            $employeereturn[]=$employee;

        }
        foreach ($certificatesapproval as $certificate) {
            $employee= DB::table('employees')->where('id','=',$certificate->Emp_id??"")->first();
            $employeeapproval[]=$employee;

        }

        return view('Dashboard.employees.Personal_Certificate.Review_Certificates', ['certificates' => $certificates,'employeepend'=>$employeepend,'employeereturn'=>$employeereturn,'employeeapproval'=>$employeeapproval,'currentdate'=>$currentdate,'certificatespending'=>$certificatespending,'certificatesreturn'=>$certificatesreturn,'certificatesapproval'=>$certificatesapproval]);

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


