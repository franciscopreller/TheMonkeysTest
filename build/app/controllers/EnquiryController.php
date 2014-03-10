<?php

class EnquiryController extends BaseController {

	// Convert controller to RESTful
	public $restful = true;

	public function getIndex()
	{
		$view = View::make('enquiry');

		// Initialize states
		$view->states = array(
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
			'General enquiry',
			'Product feedback or enquiry',
			'Product complaint'
		);

		return $view;
	}

	public function postIndex()
	{

	}

}