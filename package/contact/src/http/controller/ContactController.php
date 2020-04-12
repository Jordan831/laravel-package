<?php

namespace Vikram\Contact\http\controller;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Vikram\Contact\model\Contact;
class ContactController extends Controller
{

  public function index(){

    return view('contact::contact');
  }

  public function store(Request $r){

     $data = $r->all();
     Contact::firstOrCreate([
 'email'=> $r->email
],
[
  'description'=>$r->description
]
);
     return view('contact::contact');

  }
}
