<?php

namespace App\Http\Controllers;

use App\Models\Donation;
use Illuminate\Http\Request;

class DonationController extends Controller
{
    public function index()
    {
        $donations = Donation::all();
        return view('donations.index', compact('donations'));
    }

    public function create()
    {
        return view('donations.create');
    }

    public function store(Request $request){

        $validatedData = $request->validate([
            'donor_name' => 'required|string|max:255',
            'amount' => 'required|numeric|min:0',
            'message' => 'nullable|string|max:500',
        ]);

        Donation::create($validatedData);

        return redirect()->route('donations.index')->with('success', 'Donation created successfully!');
    }

    public function edit($id)
    {
    $donation = Donation::findOrFail($id); 
    return view('donations.edit', compact('donation')); 
    }


    public function update(Request $request, $id)
{
    $donation = Donation::findOrFail($id);

    $validated = $request->validate([
        'donor_name' => 'required|string|max:255',
        'amount' => 'required|numeric|min:1',
        'message' => 'nullable|string|max:500',
    ]);

    $donation->update($validated);

    return redirect()->route('donations.index')->with('success', 'Donation updated successfully!');
}


    public function destroy(Donation $donation){
        
        $donation->delete();
        return redirect()->route('donations.index')->with('success', 'Donation deleted successfully!');
    }
}

