<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
      
       return view('pages.index');
      
    }
    public function client(){
      
       return view('pages.client');
      
    }
    public function sponsor(){
      
       return view('pages.sponsor');
      
    }
    public function memberList(){
      
       return view('pages.memberList');
      
    }
    public function sponsorList(){
      
       return view('pages.sponsorList');
      
    }
}
