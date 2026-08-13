<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        // Retrieve the latest About record
        $abouts = About::latest()->get();

        // Pass $about to the welcome view
        return view('Admin.about.index', compact('abouts'  ));
    }

    public function create()
    {
        return view('Admin.about.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'description'  => 'nullable|string',
            'description2' => 'nullable|string',
        ]);

        About::create([
            'description'  => $request->description,
            'description2' => $request->description2,
        ]);

        return redirect()->route('about.index')->with('success', 'About section created successfully.');
    }

    public function edit($id)
    {
        $about = About::findOrFail($id);
        return view('Admin.about.edit', compact('about'));
    }

    public function update(Request $request, $id)
    {
        $about = About::findOrFail($id);

        $request->validate([
            'description'  => 'nullable|string',
            'description2' => 'nullable|string',
        ]);

        $about->description  = $request->description;
        $about->description2 = $request->description2;
        $about->save();

        return redirect()->route('about.index')->with('success', 'About section updated successfully.');
    }

    public function delete($id)
    {
        $about = About::findOrFail($id);
        $about->delete();

        return redirect()->route('about.index')->with('success', 'About section deleted successfully.');
    }
}
