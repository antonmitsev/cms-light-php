<?php 
class Home extends aPage {
    public function init() {
        $this->page_vars = array(
            'title' => 'CMS Light - PHP/Docker',
            'description' => 'CMS Light - PHP + Docker CMS codeframe',
            'h1' => 'CMS Light - Home',
            'page-class' => 'home',
            'content' => <<<ML
            <blockquote>Do not forget the clean code and the Author's tip ;)</blockquote>

            <p>dipl. eng. Mitsev, Bc. Sci.</p>

<p>Hope this works for you at least as well as for me! Do not forget to monetize your experience at <a href="https://www.tonymitsev.com">tonymitsev.com</a></p>
ML
        );
    }
}