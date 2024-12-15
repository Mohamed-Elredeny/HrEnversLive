<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;
class RegisterController extends Controller
{
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $employeeemailWork = $request['emailWork'];
        $emp = Employee::where('emailWork', $employeeemailWork)->first();
        if ($request['Password_signUp'] != $request['confirm_password'])
        {
            return redirect()->back()->with('error', "Please crrect password");
        }

            if (!$request->hasFile('filenameimg'))
            {
                return back()->with('error', 'Please upload a file.');
            }
           $file = $request->file('filenameimg');
          $fileName=$file->getClientOriginalName();
          $file_to_store = time() . '_' . $fileName;
         $file->move(public_path('assets/images/'), $file_to_store);
             $token = Str::random(60);
             $employee= Employee::create([
             'empCode' => $request['employee_numberr'],
             'emailWork'=> $request['work_email'],
             'mobile_new'=> $request['mobile_number'],
             'password'  => Hash::make($request['Password_signUp']),
//           'confirm_password' => Hash::make($request['confirm_password']),
             'image' =>$file_to_store ,
             'company_id' => $request['company_id']??"null",
        ]);

        Auth::guard('employee')->login($employee);
                return  redirect()->route('dashboard');
//            }
//            return redirect()->back()->with('err','emp doesnot exist');


    }



    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    //
}
