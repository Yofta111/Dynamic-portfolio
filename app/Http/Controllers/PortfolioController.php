<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class PortfolioController extends Controller
{
    public function index()
    {
        $portfolios = Portfolio::latest()->get();
        return view('Admin.portfolio.index', compact('portfolios'));
    }

    public function create()
    {
        return view('Admin.portfolio.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title'       => 'nullable|string|max:255',
            'type'        => 'nullable|string|max:255',
            'category'    => 'nullable|string|max:255',
            'link'        => 'nullable|string',
            'description' => 'nullable|string',
            'image'       => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
        ]);

        $imagePath = null;
        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('uploads/portfolios'), $imageName);
            $imagePath = 'uploads/portfolios/' . $imageName;
        }

        Portfolio::create([
            'title'       => $request->title,
            'type'        => $request->type,
            'category'    => $request->category,
            'link'        => $request->link,
            'description' => $request->description,
            'image'       => $imagePath,
        ]);

        return redirect()->route('portfolios.index')->with('success', 'Portfolio created successfully.');
    }

    public function edit($id)
    {
        $portfolio = Portfolio::findOrFail($id);
        return view('Admin.portfolio.edit', compact('portfolio'));
    }

    public function update(Request $request, $id)
    {
        $portfolio = Portfolio::findOrFail($id);

        $request->validate([
            'title'       => 'nullable|string|max:255',
            'type'        => 'nullable|string|max:255',
            'category'    => 'nullable|string|max:255',
            'link'        => 'nullable|string',
            'description' => 'nullable|string',
            'image'       => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
        ]);

        if ($request->hasFile('image')) {
            if ($portfolio->image && File::exists(public_path($portfolio->image))) {
                File::delete(public_path($portfolio->image));
            }

            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('uploads/portfolios'), $imageName);
            $portfolio->image = 'uploads/portfolios/' . $imageName;
        }

        $portfolio->title       = $request->title;
        $portfolio->type        = $request->type;
        $portfolio->category    = $request->category;
        $portfolio->link        = $request->link;
        $portfolio->description = $request->description;
        $portfolio->save();

        return redirect()->route('portfolios.index')->with('success', 'Portfolio updated successfully.');
    }

    public function destroy($id)
    {
        $portfolio = Portfolio::findOrFail($id);

        if ($portfolio->image && File::exists(public_path($portfolio->image))) {
            File::delete(public_path($portfolio->image));
        }

        $portfolio->delete();

        return redirect()->route('portfolios.index')->with('success', 'Portfolio deleted successfully.');
    }
}
