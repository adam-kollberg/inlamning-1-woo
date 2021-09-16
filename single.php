<?php
/**
 * Template Name: single post
 */
?>

<!DOCTYPE html>
<html>

<head>
    <?php wp_head(); ?>
    <meta charset="UTF-8" />
    <title <?php the_title(); ?>> </title>
    <?php get_header(); ?>
</head>

<body>

    <div id="wrap">

        <main>
            <section>
                <div class="container">
                    <div class="row">
                        <div id="primary" class="col-xs-12 col-md-9">

                            <!--loops through the posts and shows a specific blogpost and writes out, image, title, the date dynamic-->
                            <?php if (have_posts()) : ?>
                            <?php while (have_posts()) : the_post(); ?>
                            <article>

                                <img src="<?php echo get_the_post_thumbnail_url();?> " />
                                <h2 class="title"></h2>
                                <?php the_title();?>


                                <ul class="meta">
                                    <li>
                                        <i class="fa fa-calendar"></i> <?php the_date('F j, Y');  ?></p>
                                    </li>
                                    <li>
                                        <i class="fa fa-user"></i> <a href="forfattare.html"> <?php the_author(); ?>
                                        </a>
                                    </li>
                                    <li>
                                        <i class="fa fa-tag"></i> <a href="<?php echo get_the_category_list(", "); ?>">
                                        </a>
                                    </li>
                                </ul>
                                <?php the_content();?>

                                <?php endwhile; ?>
                                <?php endif; ?>





                        </div>
                        
                    </div>
                </div>
            </section>
        </main>

        <?php get_footer(); ?>