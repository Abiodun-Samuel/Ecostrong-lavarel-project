<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index (){
       $metatitle = "Home | Welcome to Ecostrong Company";
       return view("index", compact("metatitle"));
    }
   public function about (){
       $metatitle = "About Us | Ecostrong Company";
       $innertitle = "About Us";
       return view("about_us" , compact("metatitle", "innertitle"));
    }
   
     public function properties (){
        $metatitle = "Properties For Sale | Least | Rent";
       $innertitle = "Properties";
       return view("properties" , compact("metatitle", "innertitle"));
    }
   public function services ($service_page){
      $metatitle = "$service_page";
      $innertitle = "$service_page";
       return view("services/$service_page" , compact("metatitle", "innertitle"));
    }
   
}
