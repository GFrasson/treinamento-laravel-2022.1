<?php

namespace App\Http\Controllers;

use App\Http\Requests\MemberRequest;
use App\Models\Core;
use App\Models\Member;
use App\Models\Role;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $members = Member::all();
        return view('admin.members.index', compact('members'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $member = new Member();
        $roles = Role::all();
        $cores = Core::all();

        return view('admin.members.create', compact('member', 'roles', 'cores'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MemberRequest $request)
    {
        $data = $request->validated();
        $core_id = $data['core_id'] ?? null;
        unset($data['core_id']);

        $member = Member::create($data);

        $member->cores()->sync($core_id);
        $member->save();
        
        return redirect()->route('members.index')->with('success', true);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function show(Member $member)
    {
        $roles = Role::all();
        $cores = Core::all();
        return view('admin.members.show', compact('member', 'roles', 'cores'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function edit(Member $member)
    {
        $roles = Role::all();
        $cores = Core::all();
        return view('admin.members.edit', compact('member', 'roles', 'cores'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MemberRequest $member)
    {
        $data = $request->all();
        $core_id = $data['core_id'] ?? null;
        unset($data['core_id']);

        $member->update($data);
        
        $member->cores()->sync($core_id);
        $member->save();

        return redirect()->route('members.index')->with('success', true);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function destroy(Member $member)
    {
        $member->delete();

        return redirect()->route('members.index')->with('success', true);
    }
}
