<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Mail\ContactFormMail;
use Illuminate\Support\Facades\Mail;

class Messages extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validateMessage($request);
    
 
        Message::create($request->all());
    
        
        Mail::to('gregor.ten1@gmail.com')->send(new ContactFormMail($request->all()));
    
    
        return redirect()->back()->with('message', 'Your message has been sent successfully!')->with('alert-class', 'alert-success');
    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    private function validateMessage(Request $request){
        $request->validate([
            'customer' => 'required|string',
            'phone' => 'nullable|string',
            'email' => 'required|string',
            'reason' => 'required|string',
            'comment' => 'required|string'
        ]);
    }
    
}
