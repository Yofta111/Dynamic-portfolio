<?php

namespace App\Http\Controllers;

use App\Models\Hero;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class HeroController extends Controller
{
    public function index()
    {
        $heroes = Hero::latest()->get();
        return view('Admin.Hero.index', compact('heroes'));
    }
    public function create()
    {
        return view('Admin.Hero.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'title'       => 'nullable|string|max:255',
            'title2'      => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'image'       => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
        ]);

        $imagePath = null;
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/heroes'), $filename);
            $imagePath = 'uploads/heroes/' . $filename;
        }
        Hero::create([
            'title'       => $request->title,
            'title2'      => $request->title2,
            'description' => $request->description,
            'image'       => $imagePath,
        ]);

        return redirect()->route('heroes.index')->with('success', 'Hero section created successfully.');
    }
    public function edit($id)
    {
        $hero = Hero::findOrFail($id);
        return view('Admin.Hero.edit', compact('hero'));
    }

    public function update(Request $request, $id)
    {
        $hero = Hero::findOrFail($id);

        $request->validate([
            'title'       => 'nullable|string|max:255',
            'title2'      => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'image'       => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
        ]);

        if ($request->hasFile('image')) {
            if ($hero->image && File::exists(public_path($hero->image))) {
                File::delete(public_path($hero->image));
            }

            $file = $request->file('image');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/heroes'), $filename);
            $hero->image = 'uploads/heroes/' . $filename;
        }

        $hero->title = $request->title;
        $hero->title2 = $request->title2;
        $hero->description = $request->description;
        $hero->save();

        return redirect()->route('heroes.index')->with('success', 'Hero section updated successfully.');
    }
    public function delete($id)
    {
        $hero = Hero::findOrFail($id);

        if ($hero->image && File::exists(public_path($hero->image))) {
            File::delete(public_path($hero->image));
        }

        $hero->delete();

        return redirect()->route('heroes.index')->with('success', 'Hero section deleted successfully.');
    }

}
