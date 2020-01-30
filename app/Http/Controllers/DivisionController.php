<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Division;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class DivisionController extends Controller
{
    //
	
	public function create()
	{
		$division = new Division();

		return view('divisions.create', [
		'division' => $division,
		]);
	}
	
	public function store(Request $request)
	{
		$division = new Division;
		$division->fill($request->all());
		$division->save();
	
		return redirect()->route('division.index');
	}
	
	public function index()
	{
		$divisions = Division::orderBy('name', 'asc')->get();

		return view('divisions.index', [
		'divisions' => $divisions
		]);
	}
	
	public function show($id)
	{
		$division = Division::find($id);
		if(!$division) throw new ModelNotFoundException;
	
		return view('divisions.show', [
		'division' => $division
		]);
	}
	
	public function edit($id)
	{
		$division = Division::find($id);
		if(!$division) throw new ModelNotFoundException;

		return view('divisions.edit', [
		'division' => $division
		]);
	}
	
	public function update(Request $request, $id)
	{
		$division = Division::find($id);
		if(!$division) throw new ModelNotFoundException;

		$division->fill($request->all());

		$division->save();

		return redirect()->route('division.index');
	}
	
	public function destroy($id)
    {
		$division = Division::find($id);
        $division->delete(); 
        return redirect()->route('division.index')
                        ->with('success','Division deleted successfully');

    }

}
