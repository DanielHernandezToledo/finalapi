<?php

namespace App\Http\Controllers\Api;


use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;
use App\Mail\ContactoMail;
use Illuminate\Support\Facades\Mail;


class ContactController extends Controller
{

    public function index()
    {
        $contacts =Contact::all();
        return $contacts;
    }

 
    public function store(Request $request)
    {
        $contact = new Contact();
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->phone = $request->phone;
        $contact->message = $request->message;

        $contact->save();

       Mail::to('daniel.aht1993@gmail.com')->send(new ContactoMail($contact));
    }

    public function show($id)
    {
        $contact = Contact::find($id);
        return $contact;
    }

 
    public function update(Request $request, $id)
    {
        $contact = Contact::findOrFail($request->id);
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->phone = $request->phone;
        $contact->message = $request->message;

        $contact->save();
        return $contact;
    }


    public function destroy($id)
    {
        $contact = Contact::destroy($id);
        return $contact;
    }


    
}
