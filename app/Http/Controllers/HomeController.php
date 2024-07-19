<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;
use App\Models\Jumbotron;
use App\Models\Contact;
use App\Models\Footer;
use App\Models\PortofolioItem;

class HomeController extends Controller
{
    public function index()
    {
        $about = About::first();
        $jumbotron = Jumbotron::first();
        $contact = Contact::first();
        $footer = Footer::first();
        $portofolios = PortofolioItem::all();

        return view('welcome', compact('about', 'jumbotron', 'contact', 'footer', 'portofolios'));
    }
}
