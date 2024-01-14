<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Mail\Subscibtion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function contact (Request $request){
     $this->validate($request, [
        "name"=> "required",
        "email"=> "required|email",
        'msg'=>'required',
        'phone'=>'required',
        'tarif'=>'required',
        'domaine'=>'required',
        'company_name'=>'required',

     ]);
     $contact = Contact::create($request->all());

     Mail::to('contact@gest-plus.com')->send(new Subscibtion($contact));
     return back()->with('success','Souscription réussie ! Une équipe vous contactera pour procéder au paiement  .');

    }
}
