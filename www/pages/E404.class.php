<?php
class E404 extends aPage
{
	public function init()
	{
		global $base_folder;
		$this->page_vars = array(
			'title' => 'CMS Light - page not found',
			'description' => 'CMS Light - page not found.',
			'h1' => '404 CMS Light - Page not found!',
			'page-class' => 'e404',
			'content' => <<<ML
<p>The page you are trying to access is missing. You can go home <a href="/">by clicking here</a>.</p>
ML

		);
	}
}
