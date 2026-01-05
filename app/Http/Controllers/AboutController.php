<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    //
    public function index(){

        $abouts = About::latest()->get();
        // return view('admin.about.index',);
        return view('admin.about.index', compact('abouts'));
    }
    //
    public function create(){
        return view('admin.about.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp',
        ]);

        $data = $request->all();

        if ($request->hasFile('image')) {
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('uploads/about'), $imageName);
            $data['image'] = 'uploads/about/'.$imageName;
        }
        About::create($data);

        return redirect()->route('about.index')
            ->with('success', 'About created successfully');
    }
    public function edit($id)
    {
        $about = About::findOrFail($id);
        return view('admin.about.edit', compact('about'));
    }
    public function update(Request $request, $id)
    {
        $abouts = About::findOrFail($id);

        $request->validate([
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp',
            'description'=> 'nullable|string',
        ]);

        $data = $request->all();
        if ($request->hasFile('image')) {
            if ($portfolio->image && file_exists(public_path($portfolio->image))) {
                unlink(public_path($portfolio->image));
            }

            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('uploads/about'), $imageName);
            $data['image'] = 'uploads/about/'.$imageName;
        }
        $abouts->update($data);

        return redirect()->route('about.index')
            ->with('success', 'About updated successfully');
    }
    public function destroy($id)
    {
        $abouts = About::findOrFail($id);
        $abouts->delete();

        return redirect()->route('about.index')
            ->with('success', 'Abouts deleted successfully');
    }
}
