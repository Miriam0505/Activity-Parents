<?php

namespace App\Http\Controllers;

use App\Models\Parents;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class ParentsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $parents = Parents::where('user_id', Auth::id())
        ->where('active', 1)
        ->select('id', 'name', 'gender')
        ->get();

        $page_title = "Parents";

        return view('parents.index', compact('parents', 'page_title'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $page_title = "Create Parents";
        return view('parents.create', compact('page_title'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Parents::create([
            'user_id' => Auth::id(),
            'name' => $request->name,
            'description' => $request->gender,
            'active' => 1,
        ]);

        return redirect()->route('parents.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $parents = Parents::where('user_id', Auth::id())
        ->where('id', $id)
        ->where('active', 1)
        ->select('id', 'name', 'gender')
        ->firstOrfail();

        $page_title="Show Parents";

        return view('parents.show', compact('parents', 'page_title'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $parent = Parents::where('user_id', Auth::id())
        ->where('id', $id)
        ->where('active', 1)
        ->select('id', 'name', 'gender')
        ->firstOrfail();

        $page_title="Edit Parents";

        return view('parents.edit', compact('parents', 'page_title'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $parents = Parents::where('user_id', Auth::id())
        ->where('id', $id)
        ->where('active', 1)
        ->select('id', 'name', 'gender')
        ->firstOrfail();

        $parents->update([
            'name' => $request->name,
            'gender' => $request->gender
        ]);

        return redirect()->route('parents.show', $id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $parent = Parents::where('user_id', Auth::id())
        ->where('id', $id)
        ->where('active', 1)
        ->select('id', 'name', 'gender')
        ->firstOrfail();

        $parent->update([
            'active' => 0
        ]);

        return redirect()->route('parents.index', $id);
    }
}
