<?php

namespace Sports;

interface Trainer
{
	/**
	 * Saving an exercise.
	 * 
	 * @param  exercise $exercise 	The exercise to be remembered.
	 * @return void             
	 */
	public function remember ( Exercise $exercise );

	/**
	 * Determine wether the exercise has been saved before.
	 * 
	 * @param  Exercise $exercise 	The exercise to check for.
	 * @return boolean             	True if the exercise has been saved false if not.
	 */
	public function knows ( Exercise $exercise ) : bool;

	/**
	 * Determine wether the exercise has not been saved before.
	 * 
	 * @param  Exercise $exercise 	The exercise to check for.
	 * @return boolean             	True if the exercise has not been saved false if not.
	 */
	public function doesNotKnow ( Exercise $exercise ) : bool;
}