<!DOCTYPE html>
<html lang="en_UK" prefix="og: http://ogp.me/ns#">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $page->page_vars['title']; ?></title>
    <meta name="description" content="<?php echo $page->page_vars['description']; ?>">
    <meta property="og:type" content="website" />
    <meta property="og:locale" content="en_UK" />
    <meta property="og:site_name" content="CMS Light by tonymitsev" />
    <meta property="og:title" content="<?php echo $page->page_vars['title']; ?>" />
    <meta property="og:description" content="<?php echo $page->page_vars['description']; ?>" />
    <meta property="og:image" content="https://cms.localhost.com/img/tc.png" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="<?php echo ($base_folder); ?>css/styles.css">
</head>

<body>
    <div class="main-container <?php echo $page->page_vars['page-class']; ?>">
        <header>
            <div>
                <p class="title">CMS Light</p>

                <nav class="top-nav">
                    <a href="<?php echo ($base_folder); ?>">Home</a>

                    <a href="<?php echo ($base_folder); ?>about/">About</a>
                </nav>
            </div>
        </header>
        <div class="container">
            <main>
                <h1><?php echo $page->page_vars['h1']; ?></h1>

                <?php echo $page->page_vars['content']; ?>
            </main>
            <nav class="side-nav">
                <a href="https://www.tonymitsev.com">Give some cash to the Author</a>

                <a href="<?php echo ($base_folder); ?>about/">About link example</a>

                <hr width="90%" />
                
                <a href="mailto:me@tonymitsev.com">E-mail</a>
            </nav>
        </div>
        
        <footer>
            <div>&copy; 2024 CMS Light - copyright <a href="https://www.tonymitsev.com/" target="_blank">tonymitsev</a></div>
        </footer>
    </div>
</body>

</html>