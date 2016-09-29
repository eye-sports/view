<?php

namespace Notifications\Sports\Exercise\Tests;

use Mockery;
use Notifications\Sports\Exercise\Added;
use Testing\TestCase;

class AddedTest extends TestCase
{
	/**
	 * @test
	 */
	public function __invoke_withExercise_addsExerciseNameToMessage ( )
	{
		$exercise = Mockery::mock ( 'Sports\\Exercise', array ( 'bench press' ) );
		$added = new Added;
		$message = $added->message . ': ' . $exercise->name;
		$added ( $exercise );

		assertThat ( $added->message, is ( identicalTo ( $message ) ) );
	}
}