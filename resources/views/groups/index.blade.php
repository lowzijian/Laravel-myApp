<?php

use App\Common;

?>
@extends('layouts.app')

@section('content')
<!-- Bootstrap Boilerplate... -->
<div class="panel-body">
	@if (count($groups) > 0)
	<table class="table table-striped task-table">
		<!-- Table Headings -->
		<thead>
			<tr>
				<th>No.</th>
				<th>Code</th>
				<th>Name</th>
				<th>Description</th>
				<th>Created</th>
				<th>Actions</th>
			</tr>
		</thead>

		<!-- Table Body -->
		<tbody>
			@foreach ($groups as $i => $group)
			<tr>
				<td class="table-text">
					<div>{{ $i+1 }}</div>
				</td>
				<td class="table-text">
					<div>
						{!! link_to_route(
						'group.show',
						$title = $group->code,
						$parameters = [
						'id' => $group->id,
						]
						) !!}
					</div>
				</td>
				<td class="table-text">
					<div>{{ $group->name }}</div>
				</td>
				<td class="table-text">
					<div>{{ $group->description }}</div>
				</td>
				<td class="table-text">
					<div>{{ $group->created_at }}</div>
				</td>
				<td class="table-text">
					<div>
						{!! link_to_route(
						'group.edit',
						$title = 'Edit',
						$parameters = [
						'id' => $group->id,
						]
						) !!}
						<!--
{!!
 Form::open(['method' => 'DELETE', 'route' => ['group.destroy', $group->id]]) 
!!}
{!!
	Form::submit('Delete')
!!}
-->
						|
						<a href="{{ route('group.delete', $group->id) }}">Delete</a>
					</div>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
	<div class="col-sm-12">
		<button type="button" style="float:right;" onclick=" window.location.href= `{{ url('group/create')}}`">Add Group</button>
	</div>
	@else
	<div>
		No records found
	</div>
	@endif
</div>
@endsection