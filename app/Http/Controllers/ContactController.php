<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contactformdata;

class ContactController extends Controller
{
    public function contact(){
        return view('contact-us');
    }

    public function hours() {
        $hour = array();
        for($i=1; $i<=12; $i++){
            $hour[$i] = $i;
        }

        for($i=0; $i<=59; $i++)
        {
            if($i< 10)
            {
                $minute[$i] = '0'.$i;
            }
            else {
                $minute[$i] = $i;
            }
        }
        $timeFormat = array('AM' => 'AM', 'PM' => 'PM');
        return view('contact-us', compact('hour', 'minute', 'timeFormat'));
    }

    public function saveContactForm(Request $request) {
        $request->validate([
            'name'      => 'required',
            'email'     => 'required|email',
            'subject'   => 'required',
            'message'   => 'required',
            'date'      => 'required',
            'hour'      => 'required',
            'minute'    => 'required',
            'format'    => 'required',
        ]);

        if($request->has('file'))
        {
            $fileName = time().'.'.$request->file->extension();
            $request->file->move(public_path('uploads'), $fileName);
        }
        $newdate = $request->date.' '.$request->hour.' '.$request->minute.' '.$request->format;
        $contactformdate = new Contactformdata;
        $contactformdate->name = $request->name;
        $contactformdate->email = $request->email;
        $contactformdate->subject = $request->subject;
        $contactformdate->message = $request->message;
        $contactformdate->datetime = $newdate;
        if($request->has('file'))
        {
            $contactformdate->file = $fileName;
        }

        return back()->with('success', "Thnakyou For Contacting Us, We Will Contact You Soon...");
    }

}
