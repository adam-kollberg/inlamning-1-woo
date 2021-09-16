<?php /* Template Name: Undersida3 */ ?>

<!DOCTYPE html>
<html>

<head>
    <?php wp_head(); ?>
    <meta charset="UTF-8" />
    <title <?php the_title(); ?>> </title>

</head>

<body>

    <div id="wrap">

        <?php get_header(); ?>

        <main>
            <section>
                <div class="container">
                    <div class="row">
                        <div id="primary" class="col-xs-12">
                            <h1><?php the_title(); ?> </h1>
                            <?php echo the_content(); ?>

                        </div>
                    </div>
                </div>
            </section>
        </main>
        <?php get_footer(); ?>