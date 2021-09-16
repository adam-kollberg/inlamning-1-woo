<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8" />
    <title <?php the_title(); ?>> </title>
    <!--Template css-->
    <?php wp_head();?>
</head>

<body>
    <div id="wrap">
        <header id="header">
            <div class="container">
                <div class="row">
                    <div class="col-xs-8 col-sm-6">
                        <a class="logo" href="<?php bloginfo('url'); ?>"> Labb1</a>
                    </div>

                    <div class="col-sm-6 hidden-xs">
                        <form id="searchform" class="searchform">
                            <div>
                                <label class="screen-reader-text">Sök efter:</label>
                                <input type="text" />
                                <input type="submit" value="Sök" />
                            </div>
                        </form>
                    </div>
                    <div class="text-right col-xs-4 visible-xs">
                        <div class="mobile-menu-wrap">
                            <i class="fa fa-search"></i>
                            <i class="fa fa-bars menu-icon"></i>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <div class="mobile-search">
            <form id="searchform" class="searchform">
                <div>
                    <label class="screen-reader-text">Sök efter:</label>
                    <input type="text" />
                    <input type="submit" value="Sök" />
                </div>
            </form>
        </div>

        <nav id="nav">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <?php wp_nav_menu( array(
                                 'theme_location' => 'home' ));?>
                    </div>
                </div>
            </div>
        </nav>