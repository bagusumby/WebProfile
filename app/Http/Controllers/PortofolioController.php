<?php

namespace App\Http\Controllers;

use App\Models\Portofolio;
use App\Models\PortofolioItem;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\Storage;

class PortofolioController extends Controller
{
    public function index()
    {
        $portofolioItems = PortofolioItem::all();
        return view('admin.portofolios.index', compact('portofolioItems'));
    }

    public function create()
    {
        return view('admin.portofolios.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'description' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'category' => 'required|string|max:255',
            'url' => 'required|url'
        ]);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
        }

        PortofolioItem::create([
            'description' => $request->description,
            'image' => $imagePath,
            'title' => $request->title,
            'category' => $request->category,
            'url' => $request->url,
        ]);

        return redirect()->route('portofolio.index')
            ->with('success', 'portofolio created successfully.');
    }

    public function show(PortofolioItem $portofolio)
    {
        return view('admin.portofolios.show', compact('portofolio'));
    }

    public function edit(PortofolioItem $portofolio)
    {
        return view('admin.portofolios.edit', compact('portofolio'));
    }

    public function update(Request $request, PortofolioItem $portofolio)
    {
        $request->validate([
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'category' => 'required|string|max:255',
            'url' => 'required|url'
        ]);

        if ($request->hasFile('image')) {
            // Hapus gambar lama jika ada
            if ($portofolio->image) {
                Storage::disk('public')->delete($portofolio->image);
            }
            $imagePath = $request->file('image')->store('image', 'public');
        }

        $portofolio->update([
            'image' => $imagePath ?? $portofolio->image,
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'category' => $request->input('category'),
            'url' => $request->input('url'),
        ]);

        return redirect()->route('portofolio.index')
            ->with('success', 'portofolio updated successfully.');
    }

    public function destroy(Portofolio $portofolio)
    {
        foreach ($portofolio->items as $item) {
            Storage::disk('public')->delete($item->image);
        }

        $portofolio->delete();

        return redirect()->route('portofolio.index')
            ->with('success', 'portofolio deleted successfully.');
    }
}
