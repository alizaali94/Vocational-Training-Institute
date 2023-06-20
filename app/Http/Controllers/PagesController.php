<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function Home(){
        return view('user.pages.home');
    }
    public function AboutUs(){
        return view('user.pages.aboutUs');
    }
    public function Policy(){
        return view('user.pages.admissionPolicy');
    }
    public function Contact(){
        return view('user.pages.contactUs');
    }
    public function Faculty(){
        return view('user.pages.faculty');
    }
    public function HowToApply(){
        return view('user.pages.howToApply');
    }
    public function OnlineAdd(){
        return view('user.pages.onlineAdmission');
    }
    public function Trades(){
        return view('user.pages.trades');
    }
}
