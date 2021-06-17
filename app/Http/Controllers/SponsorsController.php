<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sponsor;
use Illuminate\Support\Facades\Session;

class SponsorsController extends Controller
{
    public function create(Request $request)
    {



        $sponsor = [
            "emailAddress" => $request->emailAddress,
            "Firstname" => $request->Firstname,
            "Lastname" => $request->Lastname,
            "Phonenumber" => $request->Phonenumber,
            "City" => $request->City,
            "Country" => $request->Country,
            "user_id"=> auth()->user()->id
        ];

        $request->session()->put('sponsors', $sponsor);

        return redirect('/clients')->with('success', 'Sponsor Created Succesfully');
    }
    public function show()
    {
        $sponsors = Sponsor::all();

        return view('sponsor.sponsorList')->with('sponsors', $sponsors);
    }
    public function showData($id)
    {

        $sponsor = Sponsor::find($id);
        return view('sponsor.editS', ['sponsor' => $sponsor]);
    }
    public function update(Request $request)
    {
        $this->validate($request,[

            'emailAddress'=> 'required',
            'Phonenumber'=> 'required'
        ]);
        $sponsor = Sponsor::find($request->id);
        $sponsor->emailAddress = $request->emailAddress;
        $sponsor->Firstname = $request->Firstname;
        $sponsor->Lastname = $request->Lastname;
        $sponsor->Phonenumber = $request->Phonenumber;
        $sponsor->City = $request->City;
        $sponsor->Country = $request->Country;
        $sponsor->save();
        return redirect('/sponsorList')->with('success', 'Sponsor Updated Succesfully');
    }
    public function delete($id)
    {
        $sponsor = Sponsor::find($id);
        $sponsor->delete();
        return redirect('/sponsorList')->with('success', 'Sponsor Deleted Succesfully');
    }
}
