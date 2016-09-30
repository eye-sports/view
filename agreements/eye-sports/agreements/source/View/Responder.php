<?php

namespace Agreed\View;

use InvalidArgumentException;
use Facades\View\Map;

abstract class Responder
{
	private $map = null;

	public function __construct ( Map $map )
	{
		$this->map = $map;
	}
	
	public function with ( $page, array $arguments = array ( ) )
	{
		if ( ! is_string ( $page ) or empty ( $page ) )
			throw new InvalidArgumentException ( '$page must be a non empty string.' );
		$template = $this->map->get ( $page );
		$this->make ( $template, $arguments );
	}

	/**
	 * Output the contents of a template.
	 * 
	 * @param  string $template  	The template to output.
	 * @param  array  $arguments 	Optional data to fill into the placeholders of the template.
	 * @return void
	 */
	abstract public function make ( $template, array $arguments = array ( ) );
}