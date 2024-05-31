<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;
use Illuminate\View\View;
use App\Http\Requests\StoreAboutRequest;
use App\Http\Requests\UpdateAboutRequest;


class AboutController extends Controller
{
    public function index(): View
    {
        $abouts = About::all();
 
        return view('abouts.index', compact('abouts'));
    }

    public function create(): View
    {
        return view('abouts.create');
    }

    public function store(StoreAboutRequest $request): RedirectResponse
    {
        About::create($request->validated());
        
        return to_route('abouts.index');
    }

    public function edit(About $about)
    {
        return view('abouts.edit', compact('about'));
    }
 
    public function update(UpdateAboutRequest $request, About $about): RedirectResponse
    {
        $about->update($request->validated());
 
        return to_route('abouts.index');
    }
}
