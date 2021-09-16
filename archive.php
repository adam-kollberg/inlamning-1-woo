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
                        <div id="primary" class="col-xs-12 col-md-9">
                            <h1>
                                <?php if(is_author()){
                                    the_author();
                                } elseif(is_category()){
                                    single_cat_title();
                                }?>
                            </h1>
                            <!-- start the loop, to loop through the blogposts and write it out -->

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
                                        <i class="fa fa-tag"></i>
                                        <?php echo get_the_category_list(', '); ?>
                                    </li>
                                </ul>
                                <?php the_content();?>

                                <?php endwhile; ?>
                                <?php endif; ?>




                                <nav class="navigation pagination">
                                    <!-- show pagination-->
                                    <?php echo paginate_links(); ?>

                                </nav>


                        </div>


                        <aside id="secondary" class="col-xs-12 col-md-3">
                            <div id="sidebar">

                                <ul>
                                    <li>
                                        <form id="searchform" class="searchform">
                                            <div>
                                                <label class="screen-reader-text">Sök efter:</label>
                                                <input type="text" />
                                                <input type="submit" value="Sök" />
                                            </div>
                                        </form>
                                    </li>
                                </ul>
                                <ul role="navigation">
                                    <li class="pagenav">
                                        <h2>Sidor</h2>
                                        <?php wp_nav_menu( array(
                                 'theme_location' => 'sidebarMenu', 'menu_id' => 'sidor-container' ));?>
                                    </li>
                                    <li>
                                        <h2>Arkiv</h2>
                                        <ul>
                                            <li>
                                                <?php wp_get_archives( array( 'type' => 'monthly', 'format' => 'option' ) ); ?>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="categories">
                                        <h2>Kategorier</h2>
                                        <ul>
                                            <li class="cat-item">
                                                <?php echo get_the_category_list(', '); ?>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </aside>


                    </div>

                </div>
            </section>
        </main>


        <?php get_footer();
		 ?>