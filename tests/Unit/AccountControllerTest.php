<?php

require_once 'ControllerTestCase.php';

class AccountControllerTest extends ControllerTestCase
{

	public function testSignupWithNoDataRedirectsAndHasErrors()
	{
		$response = $this->post('Auth\LoginController@login', array());
		$this->assertEquals('302', $response->foundation->getStatusCode());

		$session_errors = Session::instance()->get('errors')->all();
		$this->assertNotEmpty($session_errors);
	}

	public function testSignupWithValidDataRedirectsAndHasNoErrors()
	{
		$response = $this->post('account@signup', array(
			'username' => 'validusername',
			'email' => 'some@validemail.com',
			'password' => 'passw0rd',
			'password_confirm' => 'passw0rd',
		));
		$this->assertEquals('302', $response->foundation->getStatusCode());

		$session_errors = Session::instance()->get('errors');
		$this->assertNull($session_errors);
	}

}