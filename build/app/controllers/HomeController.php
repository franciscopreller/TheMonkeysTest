<?php

class HomeController extends BaseController {

	// Convert controller to RESTful
	public $restful = true;

	public function getIndex()
	{
		return View::make('enquiry');
	}

}