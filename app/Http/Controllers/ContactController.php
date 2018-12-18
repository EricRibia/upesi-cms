<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
class ContactController extends Controller
{
    public function userforms(Request $request){
        $contact = new Contact;
        if($request->input('identifier') == 'contact'){
            $contact->type = 'contact';
            $name = $request->input('name') . ' ' . $request->input('name');
            $contact->name = $name;
            $contact->email = $request->input('email');
            $contact->phonenumber = $request->input('phone');
            $contact->orgnmessage =$request->input('message');
            $contact->save();
            return  redirect()->back()->with('msg','message');
        }
        if($request->input('identifier') == 'assistance'){
            $contact->type = 'assistance';
            $contact->name = $request->input('name');
            $contact->email = $request->input('email');
            $contact->phonenumber = $request->input('phone');
            $contact->orgnmessage =$request->input('message');
            $contact->save();
            return  redirect()->back()->with('msg','message');  
        }
    
    }
}
