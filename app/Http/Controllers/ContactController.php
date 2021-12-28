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
            $hour[$i] = $i;
        }

        for($i=0; $i<=59; $i++)
        {
            $minute[$i] = $i;
        }
        return view('contact-us', compact('hour', 'minute'));
    }

}
