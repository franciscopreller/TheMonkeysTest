<?php

class EnquiryController extends BaseController {

	// Convert controller to RESTful
	public $restful = true;

	/**
	 * Enquiry form view - presents the form
	 * @return View The view.
	 */
	public function getIndex()
	{
		$view = View::make('enquiry');

		// Initialize states
		$view->states = array(
			''    => '-- Select --',
			'ACT' => 'Australian Capital Territory',
			'NSW' => 'New South Wales',
			'NT'  => 'Northern Territory',
			'QLD' => 'Queensland',
			'SA'  => 'South Australia',
			'TAS' => 'Tasmania',
			'VIC' => 'Victoria',
			'WA'  => 'Western Australia'
		);

		// Initialize enquiry types
		$view->enquiryTypes = array(
			'' => '-- Select --',
			0  => 'General enquiry',
			1  => 'Product feedback or enquiry',
			2  => 'Product complaint'
		);

		return $view;
	}

	/**
	 * Receives the inputs from the enquiry form and validates them.
	 * @return [type] [description]
	 */
	public function postIndex()
	{
		$inputs = Input::all();
		$rules  = array(
			'firstName' 	=> 'required',
			'surname'   	=> 'required',
			'email'     	=> 'required|email',
			'contactNumber' => 'required',
			'address'		=> 'required',
			'suburb'		=> 'required',
			'state'			=> 'required',
			'postcode'		=> 'required',
			'enquiryType'	=> 'required'
		);

		// Set conditional rules
		if (isset($inputs['enquiryType']) && $inputs['enquiryType'] === '2') {
			
			// Add specific rules
			$rules['productName'] = 'required';
			$rules['productSize'] = 'required';
			$rules['useByDate']   = 'required';
			$rules['batchCode']   = 'required';

		}

		$validation = Validator::make($inputs, $rules);
		if ($validation->fails()) {
			return Redirect::to('enquiry')->withErrors($validation)->withInput();
		}

		return View::make('thankyou');
	}

}