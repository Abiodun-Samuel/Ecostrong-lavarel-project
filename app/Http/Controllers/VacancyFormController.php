<?php

namespace App\Http\Controllers;

use App\Mail\VacancyForm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\UploadedFile;


class VacancyFormController extends Controller
{
    public function vacancy(){
      
       $innertitle = "Application Form";
       $metatitle ="Vacancy";
       return view('forms.vacancyForm', compact('innertitle', 'metatitle'));
    }

    public function vacancySubmit(Request $request){
       
       $request ->  validate([
         'surname' => 'required|string|min:3|max:15',
         'othernames' => 'required|string|min:5|max:20',
         'phone' => 'required|integer|numeric|digits:11',
         'email' => 'required|email|',
         'address' =>  'required|string|max:20',
         'state' => 'required',
         'birthday' => 'date',
         'cv' => 'required|file|mimes:pdf,doc,docx',
         'confirm' => 'required'
       ], [
          'phone.integer' => 'Enter a valid phone number',
          'confirm.required' => 'Please confirm the details you entered are valid'
       ]
      );

      $applicants = [

            "surname" =>  htmlspecialchars($request->surname) ,
            "othernames" =>  htmlspecialchars($request->othernames) ,
            "phone" =>   htmlspecialchars($request->phone),
            "email" =>  htmlspecialchars($request->email) ,
            "address" =>  htmlspecialchars($request->address) , 
            "gender" =>  $request->gender,
            "birthday" =>  $request->birthday,
            "confirm" =>  $request->confirm,
            "cv" =>  $request->cv,

      ];

      $user = $applicants['surname'];

      // return($request->all());
      Mail::to('abiodunsamyemi@gmail.com')->send(new VacancyForm($applicants));
      return back()->with('message_sent', "$user, Your Application has been sent successfully! We will get back to you promptly" );
    }
}
