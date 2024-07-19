<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;
use Illuminate\View\View;
use App\Http\Requests\StoreAboutRequest;
use App\Http\Requests\UpdateAboutRequest;
use Illuminate\Support\Facades\Storage;

class AboutController extends Controller
{
    public function index(): View
    {
        $abouts = About::all();
 
        return view('admin.abouts.index', compact('abouts'));
    }

    public function create()
    {
        return view('admin.abouts.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'description' => 'required|string',
            'title' => 'required|string|max:255',
            'subTitle' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'birthday' => 'required|date',
            'website' => 'required|url|max:255',
            'phone' => 'required|string|max:20',
            'degree' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'city' => 'required|string|max:255',
            'myPersonalInfo' => 'required|string|max:500',
        ]);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
        }

        About::create([
            'description' => $request->description,
            'title' => $request->title,
            'subTitle' => $request->subTitle,
            'image' => $imagePath ?? null,
            'birthday' => $request->birthday,
            'website' => $request->website,
            'phone' => $request->phone,
            'degree' => $request->degree,
            'email' => $request->email,
            'city' => $request->city,
            'myPersonalInfo' => $request->myPersonalInfo,
        ]);

        return redirect()->route('abouts.index')->with('success', 'About created successfully.');

    }

    public function show($id)
    {
        $about = About::findOrFail($id);
        return view('admin.abouts.show', compact('about'));
    }

    public function edit($id)
    {
        $about = About::findOrFail($id);
        return view('admin.abouts.edit', compact('about'));
    }
 
    public function update(Request $request, $id)
    {
        $request->validate([
            'description' => 'required',
            'title' => 'required',
            'subTitle' => 'required',
            'image' => 'nullable|image|max:2048',
            'birthday' => 'required|date',
            'website' => 'required|url',
            'phone' => 'required|numeric',
            'degree' => 'required',
            'email' => 'required|email',
            'city' => 'required',
            'myPersonalInfo' => 'required',
        ]);
    
        $about = About::findOrFail($id);
    
        $about->description = $request->input('description');
        $about->title = $request->input('title');
        $about->subTitle = $request->input('subTitle');
        $about->birthday = $request->input('birthday');
        $about->website = $request->input('website');
        $about->phone = $request->input('phone');
        $about->degree = $request->input('degree');
        $about->email = $request->input('email');
        $about->city = $request->input('city');
        $about->myPersonalInfo = $request->input('myPersonalInfo');
    
        if ($request->hasFile('image')) {
            if ($about->image) {
                Storage::disk('public')->delete($about->image);
            }
            $path = $request->file('image')->store('images', 'public');
            $about->image = $path;
        }
    
        $about->save();
    
        return redirect()->route('abouts.index')->with('success', 'About updated successfully.');
    }

    public function destroy($id)
    {
        $about = About::findOrFail($id);
        
        if ($about->image) {
            Storage::disk('public')->delete($about->image);
        }
        
        $about->delete();

        return redirect()->route('abouts.index')->with('success', 'About deleted successfully.');
    }
}
