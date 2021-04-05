<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
   public function contact()
   {
      $metatitle = "Contact Us | Ecostrong Company";
      $innertitle = "Contact Us";
      return view("contact_us", compact("metatitle", "innertitle"));
   }
   public function sendEmail(Request $request)
   {

      $request->validate(
         [
            'name' => 'required|string|min:3|max:15',
            'phone' => 'required|integer|numeric|digits:11',
            'email' => 'required|email:rfc,strict,filter',
            'subject' =>  'required|string|max:20',
            'message' => 'required|string|max:255',
         ],
         [
            'phone.integer' => 'Enter a valid phone number',
            'name.alpha' => 'Name must be alphabet alone',
         ]
      );

      $details = [

         'name' => htmlspecialchars($request->name),
         'phone' => htmlspecialchars($request->phone),
         'email' => htmlspecialchars($request->email),
         'subject' => htmlspecialchars($request->subject),
         'message' => htmlspecialchars($request->message)
      ];
      $user_name = $details['name'];
      $to = "secretary@ecostrongcompany.com.ng";

      Mail::to($to)->send(new ContactMail($details));
      return back()->with('message_sent', "$user_name, Your message has been sent successfully! We will get back to you promptly.");
   }
}
