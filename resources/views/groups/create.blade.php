<?php

use App\Common;
?>
@extends('layouts.app')

@section('content')

<!-- Bootstrap Boilerplate... -->

<div class="panel-body col-sm-12">
	<!-- New Group Form -->
	{!! Form::model($group, [
	'route' => ['group.store'],
	'class' => 'form-horizontal'
	]) !!}

	<!-- Code -->
	<div class="form-group row">
		{!! Form::label('group-code', 'Code', [
		'class' => 'control-label col-sm-3',
		]) !!}
		<div class="col-sm-9">
			{!! Form::text('code', null, [
			'id' => 'group-code',
			'class' => 'form-control',
			'maxlength' => 3,
			]) !!}
		</div>
	</div>

	<!-- Name -->
	<div class="form-group row">
		{!! Form::label('group-name', 'Group', [
		'class' => 'control-label col-sm-3',
		]) !!}
		<div class="col-sm-9">
			{!! Form::text('name', null, [
			'id' => 'group-name',
			'class' => 'form-control',
			'maxlength' => 100,
			]) !!}
		</div>
	</div>

	<!-- Description -->
	<div class="form-group row">
		{!! Form::label('group-description', 'Description', [
		'class' => 'control-label col-sm-3',
		]) !!}
		<div class="col-sm-9">
			{!! Form::textarea('description', null, [
			'id' => 'group-description',
			'class' => 'form-control',
			]) !!}
		</div>
	</div>

	<div class="form-group row">
		{!! Form::label('Members', 'Members', [
		'class' => 'control-label col-sm-3',
		]) !!}
		<div class="col-sm-9">
			{!! Form::select('members[]',
			$members,
			null,
			['class' => 'form-control',
			'multiple' => 'multiple']) !!}
		</div>
	</div>

	<!-- Submit Button -->
	<div class="form-group row">
		<div class="col-sm-offset-3 col-sm-6">
			{!! Form::button('Save', [
			'type' => 'submit',
			'class' => 'btn btn-primary',
			]) !!}
		</div>
	</div>
	{!! Form::close() !!}
</div>

@endsection