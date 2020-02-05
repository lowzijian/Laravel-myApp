<?php

use App\Common;
use App\Division;

?>
@extends('layouts.app')

@section('content')

<!-- Bootstrap Boilerplate... -->

<div class="panel-body col-sm-12">
<!-- New Member Form -->
{!! Form::model($member, [
'route' => ['member.update', $member->id],
'method' => 'put',
'class' => 'form-horizontal'
]) !!}

<!-- Membership No -->
<div class="form-group row">
{!! Form::label('member-membership_no', 'Membership No', [
'class' => 'control-label col-sm-3',
]) !!}
<div class="col-sm-9">
{!! Form::text('membership_no', $member->membership_no, [
'id' => 'member-membership_no',
'class' => 'form-control',
'maxlength' => 3,
]) !!}
</div>
</div>

<!-- NRIC -->
<div class="form-group row">
{!! Form::label('member-nric', 'NRIC', [
'class' => 'control-label col-sm-3',
]) !!}
<div class="col-sm-9">
{!! Form::text('nric', $member->nric, [
'id' => 'member-nric',
'class' => 'form-control',
'maxlength' => 3,
]) !!}
</div>
</div>

<!-- Name -->
<div class="form-group row">
{!! Form::label('member-name', 'Name', [
'class' => 'control-label col-sm-3',
]) !!}
<div class="col-sm-9">
{!! Form::text('name', $member->name, [
'id' => 'member-name',
'class' => 'form-control',
'maxlength' => 100,
]) !!}
</div>
</div>

<!-- Address -->
<div class="form-group row">
{!! Form::label('member-address', 'Address', [
'class' => 'control-label col-sm-3',
]) !!}
<div class="col-sm-9">
{!! Form::textarea('address', $member->address, [
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
{!! Form::text('postcode', $member->postcode, [
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
{!! Form::text('city', $member->city, [
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
{!! Form::select('state', Common::$states, $member->state, [
'class' => 'form-control',
'placeholder' => '- Select State -',
]) !!}
</div>
</div>

<!-- Postcode -->
<div class="form-group row">
{!! Form::label('member-phone', 'Phone', [
'class' => 'control-label col-sm-3',
]) !!}
<div class="col-sm-9">
{!! Form::text('phone', $member->phone, [
'id' => 'member-phone',
'class' => 'form-control',
'maxlength' => 5,
]) !!}
</div>
</div>

<!-- Division -->
<div class="form-group row">
{!! Form::label('member-division_id', 'Division', [
'class' => 'control-label col-sm-3',
]) !!}
<div class="col-sm-9">
{!! Form::select('division_id', Division::pluck('name','id'), $member->division_id, [
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
	$member->groups->pluck('id')->toArray(),
	['class' => 'form-control',
	'multiple' => 'multiple']) !!}
</div>
</div>



<!-- Submit Button -->
<div class="form-group row">
<div class="col-sm-offset-3 col-sm-6">
{!! Form::button('Update', [
'type' => 'submit',
'class' => 'btn btn-primary',
]) !!}
</div>
</div>
{!! Form::close() !!}
</div>

@endsection