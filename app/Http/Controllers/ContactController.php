<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index(): View
    {
        $contacts = Contact::all();
        return view('admin.contact.index', compact('contacts'));
    }

    public function create()
    {
        return view('admin.contact.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'location' => 'required|max:255',
            'email' => 'required|email|max:255',
            'whatsapp' => 'required|max:20',
        ]);

        Contact::create($request->all());

        return redirect()->route('contact.index')
            ->with('success', 'Contact created successfully.');
    }

    public function show(Contact $contact)
    {
        return view('admin.contact.show', compact('contact'));
    }

    public function edit(Contact $contact)
    {
        return view('admin.contact.edit', compact('contact'));
    }

    public function update(Request $request, Contact $contact)
    {
        $request->validate([
            'location' => 'required|max:255',
            'email' => 'required|email|max:255',
            'whatsapp' => 'required|max:20',
        ]);

        $contact->update($request->all());

        return redirect()->route('contact.index')
            ->with('success', 'Contact updated successfully.');
    }

    public function destroy(Contact $contact)
    {
        $contact->delete();

        return redirect()->route('contact.index')
            ->with('success', 'Contact deleted successfully.');
    }

}
