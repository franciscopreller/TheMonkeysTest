<?php

class HomeController extends BaseController {

	// Convert controller to RESTful
	public $restful = true;

	public function get_index();
	{
		return View::make('hello');
	}

}