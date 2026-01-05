<?php

namespace App\Http\Controllers;

use App\Models\MyService;
use Illuminate\Http\Request;

class MyServicesController extends Controller
{
    //
    public function index(){
        $myServices = MyService::latest()->get();
        return view('admin.myServices.index', compact('myServices'));
    }
    //
    public function create(){
        return view('admin.myServices.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        $data = $request->all();

        MyService::create($data);

        return redirect()->route('myServices.index')
            ->with('success', 'MyService created successfully');
    }
    public function edit($id)
    {
        $myService = MyService::findOrFail($id);
        return view('admin.myServices.edit', compact('myService'));
    }
    public function update(Request $request, $id)
    {
        $myService = MyService::findOrFail($id);

        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        $data = $request->all();


        $myService->update($data);

        return redirect()->route('myServices.index')
            ->with('success', 'MyService updated successfully');
    }
    public function destroy($id)
    {
        $myService = MyService::findOrFail($id);

        $myService->delete();

        return redirect()->route('myServices.index')
            ->with('success', 'MyService deleted successfully');
    }
}
