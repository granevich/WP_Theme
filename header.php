
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <title><?php echo get_bloginfo('name');?></title>
<!--    <link rel="stylesheet" href="css/main.css">-->
    <script
            src="https://code.jquery.com/jquery-2.2.4.min.js"
            integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
            crossorigin="anonymous"></script>
<!--    <script src="js/main.js"></script>-->
    <?php wp_head()?>
</head>
    <body>
        <header>
            <nav>
                <div class="search">

<!--                    <form role="search" method="get" id="searchform" action="--><?php //echo home_url( '/' ) ?><!--" >-->
<!--                        <label class="screen-reader-text" for="s">Поиск: </label>-->
<!--                        <input type="text" value="--><?php //echo get_search_query() ?><!--" name="s" id="s" />-->
<!--                        <input type="submit" id="searchsubmit" value="найти" />-->
<!--                    </form>-->
                    <?php get_search_form(); ?>
<!--                    <input type="text" id="search" placeholder="Search">-->
                </div>
                <div class="humb-visibility">
                    <div class="menu-humb">
                        <span class="menu-global menu-top"></span>
                        <span class="menu-global menu-middle"></span>
                        <span class="menu-global menu-bottom"></span>
                    </div>
                </div>
                <div class="small-wp-menu">
                    <?php wp_nav_menu();?>
                </div>
                <div class="logo">
                    <h1><a href="http://granevich.com"><?php echo get_bloginfo('name');?></a>  <img class="search-icon" src="<?php echo get_template_directory_uri();?>/img/magnifier-tool.svg" alt=""></h1>
                    <div><?php echo get_bloginfo('description');?></div>
                </div>
                <div class="large-wp-menu"><?php wp_nav_menu();?></div>


<!--                <div class="wrapper_nav">-->
<!--                    <ul>-->
<!--                        <li><a href="">Home</a></li>-->
<!--                        <li class="blog">Blog</li>-->
<!--                        <li><a href="">CV</a></li>-->
<!--                    </ul>-->
<!--                </div>-->
<!--                <ul class="under_nav">-->
<!--                    <li><a href="">Статьи</a></li>-->
<!--                    <li><a href="">Перевод</a></li>-->
<!--                    <li><a href="">HOWTO</a></li>-->
<!--                    <li>back</li>-->
<!--                </ul>-->
            </nav>
        </header>