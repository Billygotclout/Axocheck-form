<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sponsor;

class SponsorsController extends Controller
{
    public function create(Request $request){

$sponsor = new Sponsor;
$sponsor-> emailAddress = $request->emailAddress;
$sponsor-> Firstname = $request->Firstname;
$sponsor-> Lastname = $request->Lastname;
$sponsor-> Phonenumber = $request->Phonenumber;
$sponsor-> City = $request->City;
$sponsor-> Country = $request->Country;
$sponsor-> save();
return redirect('/client')->with('success', 'Sponsor Created Succesfully');

    }
    public function show()
    {
        $sponsors= Sponsor::all();
        return view('pages.sponsorList')-> with( 'sponsors', $sponsors);
       
    }
}
