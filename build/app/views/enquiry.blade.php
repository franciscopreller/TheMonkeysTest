@extends('layouts.common')

@section('body')

	{{ Form::open(array('url' => 'enquiry', 'method' => 'post', 'class' => 'enquiry-form')) }}

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
		<!-- Address -->
		<section class="row">
			<div class="small-12 medium-8 medium-offset-2 columns">
				<div class="row">
					<div class="medium-4 columns">
						{{ Form::label('address', 'Address', array('class' => 'inline small-text-left medium-text-right')) }}
					</div>
					<div class="medium-8 columns">
						{{ Form::text('address', Input::old('address')) }}
					</div>
				</div>
			</div>
		</section>

		<!-- Suburb -->
		<section class="row">
			<div class="small-12 medium-8 medium-offset-2 columns">
				<div class="row">
					<div class="medium-4 columns">
						{{ Form::label('suburb', 'Suburb', array('class' => 'inline small-text-left medium-text-right')) }}
					</div>
					<div class="medium-8 columns">
						{{ Form::text('suburb', Input::old('suburb')) }}
					</div>
				</div>
			</div>
		</section>

		<!-- State -->
		<section class="row">
			<div class="small-12 medium-8 medium-offset-2 columns">
				<div class="row">
					<div class="medium-4 columns">
						{{ Form::label('state', 'State', array('class' => 'inline small-text-left medium-text-right')) }}
					</div>
					<div class="medium-8 columns">
						{{ Form::select('state', $states, Input::old('state')) }}
					</div>
				</div>
			</div>
		</section>

		<!-- Postcode -->
		<section class="row">
			<div class="small-12 medium-8 medium-offset-2 columns">
				<div class="row">
					<div class="medium-4 columns">
						{{ Form::label('postcode', 'Postcode', array('class' => 'inline small-text-left medium-text-right')) }}
					</div>
					<div class="medium-8 columns">
						{{ Form::text('postcode', Input::old('postcode')) }}
					</div>
				</div>
			</div>
		</section>
	</div>

	<div class="form-section-wrapper">
		<!-- Enquiry type -->
		<section class="row">
			<div class="small-12 medium-8 medium-offset-2 columns">
				<div class="row">
					<div class="medium-4 columns">
						{{ Form::label('enquiryType', 'Enquiry type', array('class' => 'inline small-text-left medium-text-right')) }}
					</div>
					<div class="medium-8 columns">
						{{ Form::select('enquiryType', $enquiryTypes, Input::old('enquiryType')) }}
					</div>
				</div>
			</div>
		</section>

		<!-- Enquiry -->
		<section class="row">
			<div class="small-12 medium-8 medium-offset-2 columns">
				<div class="row">
					<div class="medium-4 columns">
						{{ Form::label('enquiry', 'Enquiry', array('class' => 'inline small-text-left medium-text-right')) }}
					</div>
					<div class="medium-8 columns">
						{{ Form::textarea('enquiry', Input::old('enquiry')) }}
					</div>
				</div>
			</div>
		</section>
	
		<!-- Submit -->
		<section class="row">
			<div class="small-12 medium-8 medium-offset-2 columns text-right">
				{{ Form::submit('SUBMIT >') }}
			</div>
		</section>
	</div>

	{{ Form::close() }}

@stop

