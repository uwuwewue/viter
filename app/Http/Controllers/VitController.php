<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vit;
use Illuminate\Auth\Events\Validated;

class VitController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $vits = Vit::with('user')
            ->latest()
            ->take(50)
            ->get();    

        return view('home2', ['vits' => $vits]);
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
        $validated = $request->validate([
            'message' => 'required|string|max:255',
        ]);

        auth()->user()->vits()->create($validated);

        return redirect('/home2')->with('success', 'Your vit has been posted!');
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
    public function edit(Vit $vit)
    {
        $this->authorize('update', $vit);

        return view('vits.edit', compact('vit'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Vit $vit)
    {
        
    
        $this->authorize('update', $vit);

        $validated = $request->validate([
            'message' => 'required|string|max:255',
        ]);

        $vit->update($validated);

        return redirect('/home2')->with('success', 'Vit updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Vit $vit)
    {
        $this->authorize('delete', $vit);

        $vit->delete();

        return redirect('/home2')->with('success', 'Chirp deleted!');
    }
}
