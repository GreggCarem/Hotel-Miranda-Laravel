<?php
namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
   
    public function index()
    {
        $contacts = Contact::all(); 
        return view('contacts.index', compact('contacts'));
    }

   
    public function create()
    {
        return view('contacts.create');
    }

   
    public function store(Request $request)
    {
        
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'message' => 'required|string',
        ]);

        Contact::create($validatedData); 
        return redirect()->route('contacts.index')->with('success', 'Contact created successfully.');
    }

    public function show(Contact $contact)
    {
        return view('contacts.show', compact('contact'));
    }

  
    public function edit(Contact $contact)
    {
        return view('contacts.edit', compact('contact'));
    }

    
    public function update(Request $request, Contact $contact)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'message' => 'required|string',
        ]);

        $contact->update($validatedData); 
        return redirect()->route('contacts.index')->with('success', 'Contact updated successfully.');
    }

    
    public function destroy(Contact $contact)
    {
        $contact->delete();
        return redirect()->route('contacts.index')->with('success', 'Contact deleted successfully.');
    }
}