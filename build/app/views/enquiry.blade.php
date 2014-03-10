@extends('layouts.common')

@section('body')

	{{ Form::open(array('url' => '', 'method' => 'post', 'class' => 'enquiry-form')) }}

	<div class="form-section-wrapper">
		<!-- First name -->
		<section class="row">
			<div class="small-12 medium-8 medium-offset-2 columns">
				<div class="row">
					<div class="medium-4 columns">
						{{ Form::label('firstName', 'First name', array('class' => 'inline small-text-left medium-text-right')) }}
					</div>
					<div class="medium-8 columns">
						{{ Form::text('firstName', Input::old('firstName')) }}
					</div>
				</div>
			</div>
		</section>

		<!-- Last name -->
		<section class="row">
			<div class="small-12 medium-8 medium-offset-2 columns">
				<div class="row">
					<div class="medium-4 columns">
						{{ Form::label('surname', 'Surname', array('class' => 'inline small-text-left medium-text-right')) }}
					</div>
					<div class="medium-8 columns">
						{{ Form::text('surname', Input::old('surname')) }}
					</div>
				</div>
			</div>
		</section>

		<!-- Email address -->
		<section class="row">
			<div class="small-12 medium-8 medium-offset-2 columns">
				<div class="row">
					<div class="medium-4 columns">
						{{ Form::label('email', 'Email address', array('class' => 'inline small-text-left medium-text-right')) }}
					</div>
					<div class="medium-8 columns">
						{{ Form::text('email', Input::old('email')) }}
					</div>
				</div>
			</div>
		</section>

		<!-- Daytime contact number -->
		<section class="row">
			<div class="small-12 medium-8 medium-offset-2 columns">
				<div class="row">
					<div class="medium-4 columns">
						{{ Form::label('contactNumber', 'Daytime contact number', array('class' => 'inline small-text-left medium-text-right')) }}
					</div>
					<div class="medium-8 columns">
						{{ Form::text('contactNumber', Input::old('contactNumber')) }}
					</div>
				</div>
			</div>
		</section>
	</div>

	<div class="form-section-wrapper">
		<!-- First name -->
		<section class="row">
			<div class="small-12 medium-8 medium-offset-2 columns">
				<div class="row">
					<div class="medium-4 columns">
						{{ Form::label('firstName', 'First name', array('class' => 'inline small-text-left medium-text-right')) }}
					</div>
					<div class="medium-8 columns">
						{{ Form::text('firstName', Input::old('firstName')) }}
					</div>
				</div>
			</div>
		</section>
	</div>

	{{ Form::close() }}

@stop

