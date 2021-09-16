<?php /* Template Name: Undersida4 */ ?>

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
                        <div class="col-xs-12 col-sm-8 col-md-6">
                            <h1><?php the_title(); ?> </h1>
                            <?php echo the_content(); ?>
                        </div>
                        <div class="col-xs-12 col-sm-4 col-md-6">
                            <img src=<?php echo get_template_directory_uri().'/img/photo.jpg';?> />
                        </div>
                    </div>
                </div>
            </section>
        </main>

        <?php get_footer(); ?>