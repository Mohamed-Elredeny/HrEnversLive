<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Employee;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    use AuthenticatesUsers;
    public function index()
    {
        //
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->middleware('auth');
        $credentials = $request->only('emailMedgulf', 'PasswordMedgulf');

        if (Employee::attempt($credentials)) {
            return redirect()->intended('dashboard');
        }

        return redirect('/')->with('message', 'Invalid credentials. Please try again.');
    }
    public function loginMedgulf(Request $request)
    {

        if (Auth::guard('employee')->attempt(['emailWork' => $request['emailMedgulf'], 'password' => $request['PasswordMedgulf'],'company_id'=>'medgulf'])) {

//            $user = Auth::guard('employee')->user();
            return redirect()->intended('dashboard');
        }

        return redirect('/')->with('message', 'Invalid credentials. Please try again.');
    }

    public function loginTrags(Request $request)
    {


        if (Auth::guard('employee')->attempt(['emailWork' => $request['emailTrags'], 'password' => $request['PasswordTrags'],'company_id'=>'trags'])) {
            return redirect()->intended('dashboard');
        }
        return redirect('/')->with('message', 'Invalid credentials. Please try again.');
    }
    public function loginEnjineering(Request $request)
    {

        if (Auth::guard('employee')->attempt( ['emailWork' => $request['emailEngineering'], 'password' => $request['PasswordEngineering'],'company_id'=>'enjineering'])) {
            return redirect()->intended('dashboard');
        }
        return redirect('/')->with('message', 'Invalid credentials. Please try again.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    } //
}
