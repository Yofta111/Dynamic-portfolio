<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use Illuminate\Http\Request;

class SkillsController extends Controller
{
    public function index()
    {
        $skills = Skill::orderBy('track', 'asc')->latest()->get();
        return view('Admin.skill.index', compact('skills'));
    }

    public function create()
    {
        return view('Admin.skill.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'       => 'required|string|max:255',
            'track'      => 'required|in:A,B',
            'clip_class' => 'required|string|max:255',
        ]);

        Skill::create([
            'name'       => $request->name,
            'track'      => $request->track,
            'clip_class' => $request->clip_class,
        ]);

        return redirect()->route('skills.index')->with('success', 'Skill added successfully.');
    }

    public function edit($id)
    {
        $skill = Skill::findOrFail($id);
        return view('Admin.skill.edit', compact('skill'));
    }

    public function update(Request $request, $id)
    {
        $skill = Skill::findOrFail($id);

        $request->validate([
            'name'       => 'required|string|max:255',
            'track'      => 'required|in:A,B',
            'clip_class' => 'required|string|max:255',
        ]);

        $skill->update([
            'name'       => $request->name,
            'track'      => $request->track,
            'clip_class' => $request->clip_class,
        ]);

        return redirect()->route('skills.index')->with('success', 'Skill updated successfully.');
    }

    public function destroy($id)
    {
        $skill = Skill::findOrFail($id);
        $skill->delete();

        return redirect()->route('skills.index')->with('success', 'Skill deleted successfully.');
    }
}
