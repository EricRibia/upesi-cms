<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
class ContactController extends Controller
{
    public function userforms(Request $request){
        $contac = new Contact;
        $contact->type = 'assistance';
        $contact->name = $request->input('name');
        $contact->email = $request->input('email');
        $contact->phonenumber = $request->input('phone');
        $contact->orgnmessage =$$request->input('message');
        $contact->save();
        return  redirect()->back()->with('msg','message');  
    }
}
