<?php

namespace Agreed\Notifications\Sports\Exercise\Tests;

use Mockery;
use Agreed\Notifications\Sports\Exercise\Added;
use Testing\TestCase;

class AddedTest extends TestCase
{
	/**
	 * @test
	 */
	public function __invoke_withExercise_addsExerciseNameToMessage ( )
	{
		$exercise = Mockery::mock ( 'Agreed\\Sports\\Exercise', array ( 'bench press' ) );
		$added = new Added;
		$message = $added->message . ': ' . $exercise->name;
		$added ( $exercise );

		assertThat ( $added->message, is ( identicalTo ( $message ) ) );
	}
}