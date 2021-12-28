<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contact(){
        return view('contact-us');
    }

    public function hours() {
        $hour = array();

        for($i=0; $i<=12; $i++){
            array_push($hour, $i);
        }
    }

}
