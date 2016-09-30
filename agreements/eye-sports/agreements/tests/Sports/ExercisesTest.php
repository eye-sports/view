<?php

namespace Agreed\Sports\Tests;

use Mockery;
use Agreed\Sports\Exercises;
use Testing\TestCase;

class ExercisesTest extends TestCase
{
	/*
	|--------------------------------------------------------------------------
	| Constructor testing.
	|--------------------------------------------------------------------------
	*/

	/**
	 * @test
	 * @expectedException TypeError
	 */
	public function __construct_withArrayWithoutExerciseObjects_throwsException ( )
	{
		$mistake = array ( 'non exercise object', 'another one' );
		$exercises = new Exercises ( $mistake );
	}

	/**
	 * @test
	 */
	public function __construct_withValidExercisesArray_setsAllExercisesOnExercisesObject ( )
	{
		$collection = array ( 
			'bench press' => Mockery::mock ( 'Agreed\\Sports\\Exercise', array ( 'bench press' ) ), 
			'dead lift' => Mockery::mock ( 'Agreed\\Sports\\Exercise', array ( 'dead lift' ) ), 
		);

		$exercises = new Exercises ( $collection );
		assertThat ( $this->property ( $exercises, 'elements' ), is ( identicalTo ( $collection ) ) );
	}

	/*
	|--------------------------------------------------------------------------
	| Add method testing.
	|--------------------------------------------------------------------------
	*/

	/**
	 * @test
	 */
	public function add_withExercise_setsExerciseUnderExerciseNameInExercisesObject ( )
	{
		$exercise = Mockery::mock ( 'Agreed\\Sports\\Exercise', array ( 'bench press' ) );
		$exercises = new Exercises;
		$exercises->add ( $exercise );
		assertThat ( $this->property( $exercises, 'elements' ), 
			is ( identicalTo ( array ( $exercise->name => $exercise ) ) ) );
	}

	/*
	|--------------------------------------------------------------------------
	| All method testing.
	|--------------------------------------------------------------------------
	*/

	public function all_whenExercisesHasNoElements_setsArrayItteratorToEmptyArray ( )
	{
		$exercises = new Exercises;
		assertThat ( $exercises->getIterator ( ), is ( emptyArray ( ) ) );
	}

	public function all_whenExercisesHasElements_setsArrayItteratorToAllExerciseElements ( )
	{
		$collection = array ( 
			'bench press' => Mockery::mock ( 'Agreed\\Sports\\Exercise', array ( 'bench press' ) ), 
			'dead lift' => Mockery::mock ( 'Agreed\\Sports\\Exercise', array ( 'dead lift' ) ), 
		);

		$exercises = new Exercises ( $collection );
		assertThat ( $exercises->getIterator ( ), is ( identicalTo ( $collection ) ) );
	}
}