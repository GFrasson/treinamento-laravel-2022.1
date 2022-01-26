<?php

namespace App\Http\Controllers;

use App\Models\Core;
use Illuminate\Http\Request;

class CoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cores = Core::all();
        return view('admin.cores.index', compact('cores'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $core = new core();
        return view('admin.cores.create', compact('core'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCoreRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        Core::create($data);
        
        return redirect()->route('cores.index')->with('success', true);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Core  $core
     * @return \Illuminate\Http\Response
     */
    public function show(Core $core)
    {
        return view('admin.cores.show', compact('core'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Core  $core
     * @return \Illuminate\Http\Response
     */
    public function edit(Core $core)
    {
        return view('admin.cores.edit', compact('core'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCoreRequest  $request
     * @param  \App\Models\Core  $core
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Core $core)
    {
        $data = $request->all();
        $core->update($data);

        return redirect()->route('cores.index')->with('success', true);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Core  $core
     * @return \Illuminate\Http\Response
     */
    public function destroy(Core $core)
    {
        $core->delete();
        return redirect()->route('cores.index')->with('success', true);
    }
}
