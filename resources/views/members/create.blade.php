<?php
use App\Common;
use App\Division;
?>
@extends('layouts.app')

@section('content')

<!-- Bootstrap Boilerplate... -->

<div class="panel-body">
<!-- New Member Form -->
{!! Form::model($member, [
'route' => ['member.store'],
'class' => 'form-horizontal'
]) !!}

<!-- Code -->
<div class="form-group row">
{!! Form::label('member-membership_no', 'Membership No.', [
'class' => 'control-label col-sm-3',
]) !!}
<div class="col-sm-9">
{!! Form::text('membership_no', null, [
'id' => 'member-membership_no',
'class' => 'form-control',
'maxlength' => 10,
]) !!}
</div>
</div>

<!-- Name -->
<div class="form-group row">
{!! Form::label('member-name', 'Name', [
'class' => 'control-label col-sm-3',
]) !!}
<div class="col-sm-9">
{!! Form::text('name', null, [
'id' => 'member-name',
'class' => 'form-control',
'maxlength' => 100,
]) !!}
</div>
</div>

<!-- Gender -->
<div class="form-group row">
{!! Form::label('member-gender', 'Gender', [
'class' => 'control-label col-sm-3',
]) !!}


<div class="col-sm-9">
<!--{!! Form::select('gender', Common::$genders, null, [
	'class' => 'form-control',
	'placeholder' => '- Select Gender -',
	]) !!}-->
	
	@foreach(Common::$genders as $key => $val)
	{!! Form::radio('gender', $key) !!} {{$val}}
	@endforeach
</div>
</div>

<!-- NRIC -->
<div class="form-group row">
{!! Form::label('member-nric', 'NRIC', [
'class' => 'control-label col-sm-3',
]) !!}
<div class="col-sm-9">
{!! Form::text('nric', null, [
'id' => 'member-nric',
'class' => 'form-control',
'maxlength' => 12,
]) !!}
</div>
</div>

<!-- Address -->
<div class="form-group row">
{!! Form::label('member-address', 'Address', [
'class' => 'control-label col-sm-3',
]) !!}
<div class="col-sm-9">
{!! Form::textarea('address', null, [
'id' => 'member-address',
'class' => 'form-control',
]) !!}
</div>
</div>

<!-- Postcode -->
<div class="form-group row">
{!! Form::label('member-postcode', 'Postcode', [
'class' => 'control-label col-sm-3',
]) !!}
<div class="col-sm-9">
{!! Form::text('postcode', null, [
'id' => 'member-postcode',
'class' => 'form-control',
'maxlength' => 5,
]) !!}
</div>
</div>

<!-- City -->
<div class="form-group row">
{!! Form::label('member-city', 'City', [
'class' => 'control-label col-sm-3',
]) !!}
<div class="col-sm-9">
{!! Form::text('city', null, [
'id' => 'member-city',
'class' => 'form-control',
'maxlength' => 50,
]) !!}
</div>
</div>

<!-- State -->
<div class="form-group row">
	{!! Form::label('member-state', 'State', [
	'class' => 'control-label col-sm-3',
	]) !!}
<div class="col-sm-9">
	{!! Form::select('state', Common::$states, null, [
	'class' => 'form-control',
	'placeholder' => '- Select State -',
	]) !!}
</div>
</div>

<!-- Phone -->
<div class="form-group row">
{!! Form::label('member-phone', 'Phone No.', [
'class' => 'control-label col-sm-3',
]) !!}
<div class="col-sm-9">
{!! Form::text('phone', null, [
'id' => 'member-phone',
'class' => 'form-control',
'maxlength' => 20,
]) !!}
</div>
</div>

<!-- Division ID -->
<div class="form-group row">
	{!! Form::label('division-id', 'Division ID', [
	'class' => 'control-label col-sm-3',
	]) !!}
<div class="col-sm-9">
	{!! Form::select('division_id',
	Division::pluck('name', 'id'),
	null, [
	'class' => 'form-control',
	'placeholder' => '- Select Division -',
	]) !!}
</div>
</div>

<div class="form-group row">
	{!! Form::label('Groups') !!}
<div class="col-sm-9">
	{!! Form::select('groups[]',
	$groups,
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