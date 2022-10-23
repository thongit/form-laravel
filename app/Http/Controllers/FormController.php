<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Form;
use Carbon\Carbon;
class FormController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        //
    }
    public function validationForm(Request $request)
    {
        if($request->isMethod('POST')){
            $this->validate($request,
            [
                'fname'=>'required',
                'lname'=>'required',
                'company'=>'required',
                'phone'=>'required|numeric|digits:10|unique:form,phone',
                'email'=>'required|email|unique:form,email',
                'gender'=>'required',
                'donate'=>'required',
                'cardNumber'=>'required|numeric|unique:form,card_number|digits:16',
                'expiration'=>'required',
                'cvn'=>'required|numeric|digits:3'
            ],
            [
                'fname.required'=>'You have not entered data',
                'lname.required'=>'You have not entered data',
                'company.required'=>'You have not entered data',
                'phone.required'=>'You have not entered data',
                'phone.numeric'=>'You can only enter numbers',
                'phone.digits'=>'Only 10 phone numbers',
                'phone.unique'=>'Already exist',
                'gender.required'=>'You have not selected data',
                'donate.required'=>'You have not selected data',
                'cardNumber.required'=>'You have not entered data',
                'cardNumber.numeric'=>'You can only enter numbers',
                'cardNumber.unique'=>'Already exist',
                'cardNumber.digits'=>'Enter 16 numbers',
                'expiration.required'=>'You have not entered data',
                'cvn.required'=>'You have not entered data',
                'cvn.numeric'=>'You can only enter numbers',
                'cvn.digits'=>'Only 3 numbers',
                'email.required'=>'You have not entered data',
                'email.email'=>'Invalid email format',
                'email.unique'=>'Already exist',
            ]);
            $form= new Form;
            $form->first_name=$request->fname;
            $form->last_name=$request->lname;
            $form->company=$request->company;
            $form->email=$request->email;
            $form->phone=$request->phone;
            $form->gender=$request->gender;
            $form->donate=$request->donate;
            $form->payment=$request->payment;
            $form->card_number=$request->cardNumber;
            $form->expiration=carbon::parse('01-'.$request->expiration); //add day default 01
            $form->cvn=$request->cvn;
            $form->save();
            return redirect()->back()->withSuccess('Add data successfully');
        }
        else{
            return view('form');
        }
        Session::forget('_old_input');
    }
}
