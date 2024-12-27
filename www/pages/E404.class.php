<?php
class E404 extends aPage
{
	public function init()
	{
		global $base_folder;
		$this->page_vars = array(
			'title' => 'Том Кенди - писател',
			'description' => 'Страницата на Том Кенди.',
			'h1' => '404 Том Кенди - ненамерена страница',
			'page-class' => 'e404',
			'content' => <<<ML
<p>Липсваща страница. Можете да отидете на началната от <a href="/">тук</a>.</p>
ML

		);
	}
}
