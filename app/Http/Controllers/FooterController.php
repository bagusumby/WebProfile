<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Footer;

class FooterController extends Controller
{
    public function index(): View
    {
        $footers = Footer::all();
        return view('admin.footer.index', compact('footers'));
    }

    public function create()
    {
        return view('admin.footer.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'github' => 'required|url',
            'instagram' => 'required|url',
            'facebook' => 'required|url',
            'linkedin' => 'required|url',
            'copyright' => 'required',
        ]);

        Footer::create($request->all());

        return redirect()->route('footer.index')->with('success', 'Footer created successfully.');
    }

    public function show(Footer $footer)
    {
        return view('admin.footer.show', compact('footer'));
    }

    public function edit(Footer $footer)
    {
        return view('admin.footer.edit', compact('footer'));
    }

    public function update(Request $request, Footer $footer)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'github' => 'required|url',
            'instagram' => 'required|url',
            'facebook' => 'required|url',
            'linkedin' => 'required|url',
            'copyright' => 'required',
        ]);

        $footer->update($request->all());

        return redirect()->route('footer.index')->with('success', 'Footer updated successfully.');
    }

    public function destroy(Footer $footer)
    {
        $footer->delete();
        return redirect()->route('footer.index')->with('success', 'Footer deleted successfully.');
    }

}
