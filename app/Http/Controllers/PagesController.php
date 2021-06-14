<?php

namespace App\Http\Controllers;


class PagesController extends Controller
{
    public function index(){
      if (!auth()->user()) {
         return view('pages.index');
      }
       return view('home');
      
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
