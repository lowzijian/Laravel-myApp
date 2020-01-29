<?php

use App\Common;
use App\Division;

?>
@extends('layouts.app')

@section('content')

<!-- Bootstrap Boilerplate... -->

<div class="panel-body">
<table class="table table-striped task-table">
<!-- Table Headings -->
<thead>
<tr>
<th>Attribute</th>
<th>Value</th>
</tr>
</thead>
<!-- Table Body -->
<tbody>
<tr>
<td>Membership No</td>
<td>{{ $member->membership_no }}</td>
</tr>
<tr>
<td>NRIC</td>
<td>{{ $member->nric }}</td>
</tr>
<tr>
<td>Name</td>
<td>{{ $member->name }}</td>
</tr>
<tr>
<td>Gender</td>
<td>{{ Common::$genders[$member->gender] }}</td>
</tr>
<tr>
<td>Address</td>
<td>{!! nl2br($member->address) !!}</td>
</tr>
<tr>
<td>Postcode</td>
<td>{{ $member->postcode }}</td>
</tr>
<tr>
<td>City</td>
<td>{{ $member->city }}</td>
</tr>
<tr>
<td>State</td>
<td>{{ Common::$states[$member->state] }}</td>
</tr>
<tr>
<td>Phone</td>
<td>{{ $member->phone }}</td>
</tr>
<tr>
<td>Division</td>
<td>{{ Division::pluck('name','id')[$member->division_id] }}</td>
<td>Group</td>
<td>{!! Form::select('groups[]',
	$groups,
	$member->groups->pluck('id')->toArray(),
	['class' => 'form-control',
	'multiple' => 'multiple',
	'readonly' => 'true']) !!}</td>
</tr>
</tbody>
</table>
</div>
@endsection