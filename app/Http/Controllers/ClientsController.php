<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientsController extends Controller
{
  
    public function create_cl(Request $request){

$client = new Client;

$client-> Firstname = $request->Firstname;
$client-> Lastname = $request->Lastname;
$client-> relationship = $request->relationship;
$client-> gender = $request->gender;
$client-> dob = $request->dob;
$client-> Phonenumber = $request->Phonenumber;
$client-> City = $request->City;
$client-> Country = $request->Country;
$client-> state = $request->state;
$client-> ailments = $request->ailments;
$client-> special = $request->special;
$client-> dov = $request->dov;
$client-> save();
return redirect('/');
    }
    public function show()
    {
        $clients= Client::all();
        return view('pages.clientList')-> with( 'clients', $clients);

       
    }
}
