<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class PortofolioController extends Controller
{
    public function index(): View
    {
        return view('portofolio.index');
    }
}
