<?php
class About extends aPage
{
	public function init()
	{
		$this->page_vars = array(
			'title' => 'About TMC Light PHP',
			'description' => 'CMS Light PHP, by tonymitsev',
            'h1' => 'CMS Light PHP',
            'page-class' => '',
			'content' => <<<ML
<p>
    Well, it finally happened!
</p>

<p>         
    Do not forget the clean code ;)
</p>
ML
		);
	}
}
