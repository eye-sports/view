<?php

namespace View;

interface Redirector
{
	/**
	 * Redirecting back to the previous page
	 * @return void
	 */
	public function back ( );
}