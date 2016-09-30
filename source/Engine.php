<?php

namespace View;

use Agreed\View\Responder;
use	Xiaoler\Blade\Factory;

class Engine extends Responder
{
	private $blade = null;

	public function __construct ( Factory $blade, Map $map )
	{
		parent::__construct ( $map );
		$this->blade = $blade;
	}

	public function make ( $template, array $arguments = array ( ) )
	{
		echo $this->blade->make ( $template, $arguments );
	}
}