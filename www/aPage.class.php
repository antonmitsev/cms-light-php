<?php

abstract class aPage
{
	public $page_vars = array(
		'title' => '',
		'description' => '',
		'h1' => '',
		'content' => '',
		'page-class' => '',
	);

	public function __construct()
	{
		$this->init();
	}

	abstract function init();

	public function vars()
	{
		return $this->vars;
	}
}
