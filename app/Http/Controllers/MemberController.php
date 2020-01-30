<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Member;
use App\Group;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
		$members = Member::orderBy('name', 'asc')->get();

		return view('members.index', [
		'members' => $members,
		]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
		$member = new Member();
		$groups = Group::pluck('name','id');

		return view('members.create', [
		'member' => $member,
		'groups' => $groups,
		]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
		$member = new Member;
		$member->fill($request->all());
		$member->save();
		
		$member->groups()->sync($request->get('groups'));
	
		return redirect()->route('member.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
		$member = Member::find($id);
		if(!$member) throw new ModelNotFoundException;
		
		$groups = Group::pluck('name','id');
	
		return view('members.show', [
		'member' => $member,
		'groups' => $groups,
		]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
		$member = Member::find($id);
		if(!$member) throw new ModelNotFoundException;
		
		$groups = Group::pluck('name','id');

		return view('members.edit', [
		'member' => $member,
		'groups' => $groups,
		]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
		$member = Member::find($id);
		if(!$member) throw new ModelNotFoundException;

		$member->fill($request->all());

		$member->save();
		
		$member->groups()->sync($request->get('groups'));

		return redirect()->route('member.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
		$member = Member::find($id);
        $member->delete(); 
        return redirect()->route('member.index')
                        ->with('success','Member deleted successfully');

    }
}
