@extends('layouts.common')

@section('body')

	{{ Form::open(array('url' => 'enquiry', 'method' => 'post', 'class' => 'enquiry-form')) }}

	<div class="form-section-wrapper">
		<!-- First name -->
		<section class="row">
			<div class="small-12 medium-8 medium-offset-2 columns">
				<div class="row">
					<div class="medium-4 columns">
						{{ Form::label('firstName', 'First name *', array('class' => 'inline small-text-left medium-text-right')) }}
					</div>
					<div class="medium-8 columns">
						{{ Form::text('firstName', Input::old('firstName'), array('required')) }}
					</div>
				</div>
			</div>
		</section>

		<!-- Last name -->
		<section class="row">
			<div class="small-12 medium-8 medium-offset-2 columns">
				<div class="row">
					<div class="medium-4 columns">
						{{ Form::label('surname', 'Surname *', array('class' => 'inline small-text-left medium-text-right')) }}
					</div>
					<div class="medium-8 columns">
						{{ Form::text('surname', Input::old('surname'), array('required')) }}
					</div>
				</div>
			</div>
		</section>

		<!-- Email address -->
		<section class="row">
			<div class="small-12 medium-8 medium-offset-2 columns">
				<div class="row">
					<div class="medium-4 columns">
						{{ Form::label('email', 'Email address *', array('class' => 'inline small-text-left medium-text-right')) }}
					</div>
					<div class="medium-8 columns">
						{{ Form::input('email', 'email', Input::old('email'), array('required')) }}
					</div>
				</div>
			</div>
		</section>

		<!-- Daytime contact number -->
		<section class="row">
			<div class="small-12 medium-8 medium-offset-2 columns">
				<div class="row">
					<div class="medium-4 columns">
						{{ Form::label('contactNumber', 'Daytime contact number *', array('class' => 'inline small-text-left medium-text-right')) }}
					</div>
					<div class="medium-8 columns">
						{{ Form::text('contactNumber', Input::old('contactNumber'), array('required')) }}
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
						{{ Form::label('address', 'Address *', array('class' => 'inline small-text-left medium-text-right')) }}
					</div>
					<div class="medium-8 columns">
						{{ Form::text('address', Input::old('address'), array('required')) }}
					</div>
				</div>
			</div>
		</section>

		<!-- Suburb -->
		<section class="row">
			<div class="small-12 medium-8 medium-offset-2 columns">
				<div class="row">
					<div class="medium-4 columns">
						{{ Form::label('suburb', 'Suburb *', array('class' => 'inline small-text-left medium-text-right')) }}
					</div>
					<div class="medium-8 columns">
						{{ Form::text('suburb', Input::old('suburb'), array('required')) }}
					</div>
				</div>
			</div>
		</section>

		<!-- State -->
		<section class="row">
			<div class="small-12 medium-8 medium-offset-2 columns">
				<div class="row">
					<div class="medium-4 columns">
						{{ Form::label('state', 'State *', array('class' => 'inline small-text-left medium-text-right')) }}
					</div>
					<div class="medium-8 columns">
						{{ Form::select('state', $states, Input::old('state'), array('required')) }}
					</div>
				</div>
			</div>
		</section>

		<!-- Postcode -->
		<section class="row">
			<div class="small-12 medium-8 medium-offset-2 columns">
				<div class="row">
					<div class="medium-4 columns">
						{{ Form::label('postcode', 'Postcode *', array('class' => 'inline small-text-left medium-text-right')) }}
					</div>
					<div class="medium-8 columns">
						{{ Form::text('postcode', Input::old('postcode'), array('required')) }}
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
						{{ Form::label('enquiryType', 'Enquiry type *', array('class' => 'inline small-text-left medium-text-right')) }}
					</div>
					<div class="medium-8 columns">
						{{ Form::select('enquiryType', $enquiryTypes, Input::old('enquiryType'), array('required')) }}
					</div>
				</div>
			</div>
		</section>

		<!-- Product name -->
		<section class="row">
			<div class="small-12 medium-8 medium-offset-2 columns">
				<div class="row">
					<div class="medium-4 columns">
						{{ Form::label('productName', 'Product name', array('class' => 'inline small-text-left medium-text-right')) }}
					</div>
					<div class="medium-8 columns">
						{{ Form::text('productName', Input::old('productName')) }}
					</div>
				</div>
			</div>
		</section>

		<!-- Product size -->
		<section class="row">
			<div class="small-12 medium-8 medium-offset-2 columns">
				<div class="row">
					<div class="medium-4 columns">
						{{ Form::label('productSize', 'Product size', array('class' => 'inline small-text-left medium-text-right')) }}
					</div>
					<div class="medium-8 columns">
						{{ Form::text('productSize', Input::old('productSize')) }}
					</div>
				</div>
			</div>
		</section>

		<!-- Use-by date -->
		<section class="row">
			<div class="small-12 medium-8 medium-offset-2 columns">
				<div class="row">
					<div class="medium-4 columns">
						{{ Form::label('useByDate', 'Use-by date', array('class' => 'inline small-text-left medium-text-right')) }}
					</div>
					<div class="medium-8 columns">
						{{ Form::text('useByDate', Input::old('useByDate')) }}
					</div>
				</div>
			</div>
		</section>

		<!-- Batch code -->
		<section class="row">
			<div class="small-12 medium-8 medium-offset-2 columns">
				<div class="row">
					<div class="medium-4 columns">
						{{ Form::label('batchCode', 'Batch code', array('class' => 'inline small-text-left medium-text-right')) }}
					</div>
					<div class="medium-8 columns">
						{{ Form::text('batchCode', Input::old('batchCode')) }}
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

