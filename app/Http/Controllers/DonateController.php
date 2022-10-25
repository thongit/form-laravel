<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Carbon\Carbon;

//model
use App\Models\Form;

class DonateController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        return view('form');
    }
    public function store(Request $request)
    {
        $this->validate($request,
        [
            'first_name'         =>      'required',
            'last_name'          =>      'required',
            'company'            =>      'required',
            'phone'              =>      'required|numeric|digits:10|unique:form,phone',
            'email'              =>      'required|email|unique:form,email',
            'gender'             =>      'required',
            'donate'             =>      'required',
            'card_number'        =>      'required|numeric|unique:form,card_number|digits:16',
            'expiration'         =>      'required',
            'cvn'                =>      'required|numeric|digits:3'
        ],
        [
            'first_name.required'   =>'You have not entered data',
            'last_name.required'    =>'You have not entered data',
            'company.required'      =>'You have not entered data',
            'phone.required'        =>'You have not entered data',
            'phone.numeric'         =>'You can only enter numbers',
            'phone.digits'          =>'Only 10 phone numbers',
            'phone.unique'          =>'Already exist',
            'gender.required'       =>'You have not selected data',
            'donate.required'       =>'You have not selected data',
            'card_number.required'  =>'You have not entered data',
            'card_number.numeric'   =>'You can only enter numbers',
            'card_number.unique'    =>'Already exist',
            'card_number.digits'    =>'Enter 16 numbers',
            'expiration.required'   =>'You have not entered data',
            'cvn.required'          =>'You have not entered data',
            'cvn.numeric'           =>'You can only enter numbers',
            'cvn.digits'            =>'Only 3 numbers',
            'email.required'        =>'You have not entered data',
            'email.email'           =>'Invalid email format',
            'email.unique'          =>'Already exist',
        ]);
        $form= new Form;
        $form->first_name   =   $request->first_name;
        $form->last_name    =   $request->last_name;
        $form->company      =   $request->company;
        $form->email        =   $request->email;
        $form->phone        =   $request->phone;
        $form->gender       =   $request->gender;
        $form->donate       =   $request->donate;
        $form->payment      =   $request->payment;
        $form->card_number  =   $request->card_number;
        $form->expiration   =   carbon::parse('01-'.$request->expiration); //add day default 01
        $form->cvn          =   $request->cvn;
        $form->save();
        return redirect()->back()->withSuccess('Add data successfully');
    }
}
