<?php

namespace App\Http\Controllers;

use App\Models\ClientTestimonial;
use http\Client;
use Illuminate\Http\Request;
class ClientTestimonialController extends Controller
{
    //
    public function index(){

        $clients = ClientTestimonial::latest()->get();
        // return view('admin.about.index',);
        return view('admin.clientTestimonial.index', compact('clients'));
    }
    //
    public function create(){
        return view('admin.clientTestimonial.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'description' => 'nullable|string',
            'footer' => 'required|string|max:255',
        ]);

        $data = $request->all();

        ClientTestimonial::create($data);

        return redirect()->route('clientTestimonial.index')
            ->with('success', 'client created successfully');
    }
    public function edit($id)
    {
        $client = ClientTestimonial::findOrFail($id);
        return view('admin.clientTestimonial.edit', compact('client'));
    }
    public function update(Request $request, $id)
    {
        $client = ClientTestimonial::findOrFail($id);

        $request->validate([
            'description'=> 'nullable|string',
            'footer' => 'required|string|max:255',
        ]);

        $data = $request->all();

        $client->update($data);

        return redirect()->route('clientTestimonial.index')
            ->with('success', 'client updated successfully');
    }
    public function destroy($id)
    {
        $client = ClientTestimonial::findOrFail($id);
        $client->delete();

        return redirect()->route('clientTestimonial.index')
            ->with('success', 'client deleted successfully');
    }
}
