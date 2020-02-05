<?php

	use App\Common;
	use App\Division;

?>
@extends('layouts.app')

@section('content')
<!-- Bootstrap Boilerplate... -->
<div class="panel-body">
@if (count($members) > 0)
<table class="table table-striped task-table">
<!-- Table Headings -->
<thead>
<tr>
<th>No.</th>
<th>Membership No</th>
<th>NRIC</th>
<th>Name</th>
<th>Gender</th>
<th>Address</th>
<th>Postcode</th>
<th>City</th>
<th>State</th>
<th>Phone</th>
<th>Division Id</th>
<th>Action</th>
</tr>
</thead>

<!-- Table Body -->
<tbody>
@foreach ($members as $i => $member)
<tr>
<td class="table-text">
<div>{{ $i+1 }}</div>
</td>
<td class="table-text">
<div>
{!! link_to_route(
'member.show',
$title = $member->membership_no,
$parameters = [
'id' => $member->id,
]
) !!}
</div>
</td>
<td class="table-text">
<div>{{ $member->nric }}</div>
</td>
<td class="table-text">
<div>{{ $member->name }}</div>
</td>
<td class="table-text">
<div>{{ Common::$genders[$member->gender] }}</div>
</td>
<td class="table-text">
<div>{{ $member->address }}</div>
</td>
<td class="table-text">
<div>{{ $member->postcode }}</div>
</td>
<td class="table-text">
<div>{{ $member->city }}</div>
</td>
<td class="table-text">
<div>{{ Common::$states[$member->state] }}</div>
</td>
<td class="table-text">
<div>{{ $member->phone }}</div>
</td>
<td class="table-text">
<div>{{ Division::pluck('name','id')[$member->division_id] }}</div>
</td>
<td class="table-text">
<div>
{!! link_to_route(
'member.edit',
$title = 'Edit',
$parameters = [
'id' => $member->id,
]
) !!}
<!--
{!!
 Form::open(['method' => 'DELETE', 'route' => ['member.destroy', $member->id]]) 
!!}
{!!
	Form::submit('Delete')
!!}
-->
|
<a href="{{ route('member.delete', $member->id) }}">Delete</a>
</div>
</td>
</tr>
@endforeach
</tbody>
</table>
@else
<div>
No records found
</div>
@endif
</div>
@endsection