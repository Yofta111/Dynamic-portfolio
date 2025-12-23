<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    //
    public function index(){

        $portfolios = Portfolio::latest()->get();
        // return view('admin.portfolio.index',);
        return view('admin.portfolio.index', compact('portfolios'));
    }
    //
    public function create(){
        return view('admin.portfolio.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp',
            'description' => 'nullable|string',
        ]);

        $data = $request->all();

        if ($request->hasFile('image')) {
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('uploads/portfolios'), $imageName);
            $data['image'] = 'uploads/portfolios/'.$imageName;
        }
        Portfolio::create($data);

        return redirect()->route('portfolios.index')
            ->with('success', 'Portfolio created successfully');
    }
    public function edit($id)
    {
        $portfolio = Portfolio::findOrFail($id);
        return view('admin.portfolio.edit', compact('portfolio'));
    }
    public function update(Request $request, $id)
    {
        $portfolio = Portfolio::findOrFail($id);

        $request->validate([
            'title' => 'required|string|max:255',

            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp',
            'description' => 'nullable|string',
        ]);

        $data = $request->all();

        if ($request->hasFile('image')) {
            if ($portfolio->image && file_exists(public_path($portfolio->image))) {
                unlink(public_path($portfolio->image));
            }

            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('uploads/portfolios'), $imageName);
            $data['image'] = 'uploads/portfolios/'.$imageName;
        }

        $portfolio->update($data);

        return redirect()->route('portfolios.index')
            ->with('success', 'Portfolio updated successfully');
    }
    public function destroy($id)
    {
        $portfolio = Portfolio::findOrFail($id);

        if ($portfolio->image && file_exists(public_path($portfolio->image))) {
            unlink(public_path($portfolio->image));
        }

        $portfolio->delete();

        return redirect()->route('portfolios.index')
            ->with('success', 'Portfolio deleted successfully');
    }
}
