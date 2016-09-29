<?php

namespace View\Tests;

use Mockery;
use Testing\TestCase;

class ResponseTest extends TestCase
{
	private $respond, $map = null;

	public function setUp ( )
	{
		$map = $this->map = Mockery::mock ( 'Facades\\View\\Map' );
		$this->respond = Mockery::mock ( 'View\\Responder[]', array ( $map ) );
	}

	/**
	 * @test
	 * @expectedException InvalidArgumentException
	 * @dataProvider nonStringValues
	 */
	public function with_withNonStringValueForLabel_throwsException ( $value )
	{
		$this->respond->with ( $value );
	}

	/**
	 * @test
	 * @expectedException InvalidArgumentException
	 */
	public function with_withEmptyStringValueForLabel_throwsException ( )
	{
		$this->respond->with ( '' );
	}

	/**
	 * @test
	 */
	public function with_withStringForPageCallsMakeMethodCorrectly ( )
	{
		$page = 'the dashboard';
		$template = 'pages/dashboard';
		$arguments = array ( 'one' => 'one' );
		$this->map->shouldReceive ( 'get' )->with ( $page )->andReturn ( $template );
		$this->respond->shouldReceive ( 'make' )->with ( $template, $arguments )->once ( );
		$this->respond->with ( 'the dashboard', $arguments );
	}
}