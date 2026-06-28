<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vit;

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
    ], [
        'message.required' => 'Please write something to vit!',
        'message.max' => 'Vits must be 255 characters or less.',
    ]);

    \App\Models\Vit::create([
        'message' => $validated['message'],
        'user_id' => null,
    ]);

    return redirect('/')->with('success', 'Your vit has been posted!');
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
}
