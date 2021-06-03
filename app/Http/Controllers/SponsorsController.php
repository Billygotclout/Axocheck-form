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
        ];
      
        $request->session()->put('sponsors', $sponsor);

        return redirect('/client')->with('success', 'Sponsor Created Succesfully');
    }
    public function show()
    {
        $sponsors = Sponsor::all();

        return view('pages.sponsorList')->with('sponsors', $sponsors);
    }
}
