<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Resume;
use Illuminate\View\View;

class ResumeController extends Controller
{
    public function index(): View
    {
        return view('resume.index');
    }

    public function create(): View
    {
        return view('resume.create');
    }
}
