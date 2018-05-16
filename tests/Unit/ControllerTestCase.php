<?php

use Illuminate\Foundation\Testing\TestCase as BaseTestCase;

abstract class ControllerTestCase extends BaseTestCase
{

	public function setUp()
	{
		Session::load();
	}

	public function call($destination, $parameters = array(), $method = 'GET')
	{
		Request::foundation()->server->add(array(
			'REQUEST_METHOD' => $method,
		));

		return Controller::call($destination, $parameters);
	}

	public function get($destination, $parameters = array())
	{
		return $this->call($destination, $parameters, 'GET');
	}

	public function post($destination, $post_data, $parameters = array())
	{
		Request::foundation()->request->add($post_data);

		return $this->call($destination, $parameters, 'POST');
	}

}