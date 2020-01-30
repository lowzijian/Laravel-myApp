<?php

use App\Common;

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
<td>Code</td>
<td>{{ $group->code }}</td>
</tr>
<tr>
<td>Name</td>
<td>{{ $group->name }}</td>
</tr>
<tr>
<td>Description</td>
<td>{{ $group->description }}</td>
</tr>
<tr>
<td>Group</td>
<td>{!! Form::select('members[]',
	$members,
	$group->members->pluck('id')->toArray(),
	['class' => 'form-control',
	'multiple' => 'multiple',
	'readonly' => 'true']) !!}
	</td>
</tr>
<tr>
<td>Created</td>
<td>{{ $group->created_at }}</td>
</tr>
</tbody>
</table>
</div>
@endsection