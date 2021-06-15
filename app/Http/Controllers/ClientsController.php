<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Sponsor;
use Illuminate\Http\Request;

class ClientsController extends Controller
{
    

    public function create_cl(Request $request)
    {
        
        $client = new Client;
        $client->Firstname = $request->Firstname;
        $client->Lastname = $request->Lastname;
        $client->relationship = $request->relationship;
        $client->gender = $request->gender;
        $client->dob = $request->dob;
        $client->Phonenumber = $request->Phonenumber;
        $client->City = $request->City;
        $client->Country = $request->Country;
        $client->state = $request->state;
        $client->ailments = $request->ailments;
        $client->special = $request->special;
        $client->dov = $request->dov;
        $client->user_id= auth()->user()->id;

        $value = $request->session()->get('sponsors');
        $value = (array) $value;
    
        Sponsor::create($value);
       
        $client->save();
        
        return redirect('/home')->with('success', 'All Details Succesfully Created ');
    }
    public function show()
    {
        $clients = Client::all();
        return view('pages.clientList')->with('clients', $clients);
    }
    public function showData($id)
    {

        $client = Client::find($id);
        return view('pages.editC', ['client' => $client]);
    }
    public function update(Request $request)
    {
        $client = Client::find($request->id);
        $client->Firstname = $request->Firstname;
        $client->Lastname = $request->Lastname;
        $client->relationship = $request->relationship;
        $client->gender = $request->gender;
        $client->dob = $request->dob;
        $client->Phonenumber = $request->Phonenumber;
        $client->City = $request->City;
        $client->Country = $request->Country;
        $client->state = $request->state;
        $client->ailments = $request->ailments;
        $client->special = $request->special;
        $client->dov = $request->dov;
        $client->save();
        return redirect('/clientList')->with('success', 'Client Updated Succesfully');
    }
      public function delete($id){
        $client = Client::find($id);
        $client->delete();
        return redirect('/clientList')->with('success', 'Client Deleted Succesfully');

    }
}