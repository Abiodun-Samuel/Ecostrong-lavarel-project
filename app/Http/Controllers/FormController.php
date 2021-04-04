<?php

namespace App\Http\Controllers;

use App\Mail\FormMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


class FormController extends Controller
{
   public function forms($form_page)
   {
      $metatitle = "$form_page";
      $innertitle = "$form_page";
      return view("forms/forms", compact("metatitle", "innertitle"));
   }

   public function formEmail(Request $request)
   {

      $request->validate(
         [
            'form_type' => 'required',
            'training_type' => 'required',
            'surname' => 'required|string|min:3|max:50',
            'othernames' => 'string|min:3|max:50',
            'phone' =>  'required|integer|numeric|digits:11',
            'email' => 'required|email',
            'address' => 'required|max:160|',
            'gender' => 'required',
            'year' =>  'required|integer|numeric|lt:2003',
            'kin' => 'string|min:3|max:160',
            'kin_phone' => 'string|integer|numeric|digits:11',
            'confirm' => 'required'
         ],
         [
            'phone.integer' => 'Enter a valid phone number',
            'kin_phone.integer' => 'Enter a valid phone number',
            'address.max' => 'Your address must not be greater 160 characters',
            'confirm.required' => 'Please confirm that the details you entered are valid',
            'year.lt' => "Sorry, you must be more than 18 years old to signup."
         ]
      );

      $formDetails = [
         'surname' => htmlspecialchars($request->surname),
         'othernames' => htmlspecialchars($request->othernames),
         'phone' => htmlspecialchars($request->phone),
         'email' => htmlspecialchars($request->email),
         'year' => htmlspecialchars($request->year),
         'address' => htmlspecialchars($request->address),
         'kin' => htmlspecialchars($request->kin),
         'kin_phone' => htmlspecialchars($request->kin_phone),
      ];

      $user = $formDetails['surname'];

      return ($request->all());
      // Mail::to('abiodunsamyemi@gmail.com')->send(new FormMail($formDetails));
      // return back()->with('message_sent', "$user, Your Application has been sent successfully! We will get back to you promptly");
   }
}
