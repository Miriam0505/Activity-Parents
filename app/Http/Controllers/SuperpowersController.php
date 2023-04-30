<?php

namespace App\Http\Controllers;

use App\Models\Superpowers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SuperpowersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $superpowers = Superpowers::where('user_id', Auth::id())
        //dd($superpowers); //::where('id', Auth::id())
        ->where('active', 1)
        ->select('id', 'name', 'description')
        ->get();

        $page_title = "Superpowers";
        //dd($superpowers);

        return view('superpowers.index', compact('superpowers', 'page_title'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $page_title = "Superpowers.create";

        return view('superpowers.create', compact('page_title'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request);
        
        Superpowers::create([
            'user_id' => Auth::id(),
            'name' => $request->name,
            'description' => $request->description,
            'active' => 1,
        ]);

        return redirect()->route('superpowers.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $superpowers = Superpowers::where('user_id', Auth::id())
        ->where('id', $id)
        ->where('active', 1)
        ->select('id', 'name', 'desciption')
        ->firstOrfail();

        $page_title = "Show Superpower";

        return view('superpowers.show', compact('superpowers', 'page_title'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $superpower = Superpowers::where('user_id', Auth::id())
        ->where('id', $id)
        ->where('active', 1)
        ->select('id', 'name', 'desciption')
        ->firstOrfail();

        $page_title = "Edit Superpower";

        return view('superpowers.edit', compact('superpower', 'page_title'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $superpower = Superpowers::where('user_id', Auth::id())
        ->where('id', $id)
        ->where('active', 1)
        ->select('id', 'name', 'desciption')
        ->firstOrfail();

        $superpower->update([
            'name' => $request->name,
            'description' => $request->description
        ]);

        return redirect()->route('superpowers.show', $id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $superpower = Superpowers::where('user_id', Auth::id())
        ->where('id', $id)
        ->where('active', 1)
        ->select('id', 'name', 'desciption')
        ->firstOrfail();

        $superpower->update([
            'active' => 0
        ]);

        return redirect()->route('superpowers.index', $id);
    }
}