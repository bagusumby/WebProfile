<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jumbotron;
use Illuminate\Support\Facades\Storage;

class JumbotronController extends Controller
{
    public function index()
    {
        $jumbotrons = Jumbotron::all();
        return view('admin.jumbotrons.index', compact('jumbotrons'));
    }

    public function create()
    {
        return view('admin.jumbotrons.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'background_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'name' => 'required|max:255',
            'work' => 'required|max:255',
            'instagram' => 'nullable|max:255',
            'facebook' => 'nullable|max:255',
            'github' => 'nullable|max:255',
            'linkedin' => 'nullable|max:255',
        ]);

        if ($request->hasFile('background_image')) {
            $imagePath = $request->file('background_image')->store('background_images', 'public');
        }

        Jumbotron::create([
            'background_image' => $imagePath ?? '',
            'name' => $request->input('name'),
            'work' => $request->input('work'),
            'instagram' => $request->input('instagram'),
            'facebook' => $request->input('facebook'),
            'github' => $request->input('github'),
            'linkedin' => $request->input('linkedin'),
        ]);

        return redirect()->route('jumbotron.index')
            ->with('success', 'Jumbotron created successfully.');
    }

    public function show(Jumbotron $jumbotron)
    {
        return view('admin.jumbotrons.show', compact('jumbotron'));
    }

    public function edit(Jumbotron $jumbotron)
    {
        return view('admin.jumbotrons.edit', compact('jumbotron'));
    }

    public function update(Request $request, Jumbotron $jumbotron)
    {
        $request->validate([
            'background_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'name' => 'required|max:255',
            'work' => 'required|max:255',
            'instagram' => 'nullable|max:255',
            'facebook' => 'nullable|max:255',
            'github' => 'nullable|max:255',
            'linkedin' => 'nullable|max:255',
        ]);

        if ($request->hasFile('background_image')) {
            // Hapus gambar lama jika ada
            if ($jumbotron->background_image) {
                Storage::disk('public')->delete($jumbotron->background_image);
            }
            $imagePath = $request->file('background_image')->store('background_images', 'public');
        }

        $jumbotron->update([
            'background_image' => $imagePath ?? $jumbotron->background_image,
            'name' => $request->input('name'),
            'work' => $request->input('work'),
            'instagram' => $request->input('instagram'),
            'facebook' => $request->input('facebook'),
            'github' => $request->input('github'),
            'linkedin' => $request->input('linkedin'),
        ]);

        return redirect()->route('jumbotron.index')
            ->with('success', 'Jumbotron updated successfully.');
    }

    public function destroy(Jumbotron $jumbotron)
    {
        if ($jumbotron->background_image) {
            Storage::disk('public')->delete($jumbotron->background_image);
        }
        $jumbotron->delete();

        return redirect()->route('jumbotron.index')
            ->with('success', 'Jumbotron deleted successfully.');
    }

}
