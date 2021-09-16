<?php /* Template Name: Posts */ ?>

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
                            <h1>Blogg</h1>
                            <!-- start the loop, to loop through the blogposts and write it out -->
                            <?php 
								
								// the query
								$wpb_all_query = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'posts_per_page'=>-1)); ?>

                            <?php if ( $wpb_all_query->have_posts() ) : ?>

                            <ul>

                                <!-- the loop -->
                                <?php while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); ?>
                                <article>
                                    <!--writes out the thumbnail url-->
                                    <img src="<?php echo get_the_post_thumbnail_url();?> " />

                                    <!-- writes out the url  and title for a specific blogpost-->
                                    <h2 class="title">
                                        <a
                                            href="<?php echo esc_url( get_permalink( get_page_by_title("") ) ); ?>">
                                            <?php the_title();  ?> </a>
                                    </h2>
                                    <ul class="meta">
                                        <li>
                                            <i class="fa fa-calendar"></i> <?php echo get_the_date ('F j, Y');  ?></p>
                                        </li>
                                        <!--getting the author of the post dynamic-->
                                        <li>
                                            <i class="fa fa-user"></i> <a href="forfattare.html"> <?php the_author(); ?>
                                            </a>
                                        </li>
                                        <!--getting the category of the post dynamic-->
                                        <li>
                                            <i class="fa fa-tag"></i>
                                            <a href=><?php echo get_the_category_list(", ") ?></a>
                                        </li>
                                    </ul>

                                    <!--getting the content dynamic-->
                                    <p> <?php the_content(); ?> </p>

                                </article>
                                <?php endwhile; ?>
                                <!-- end of the loop -->

                            </ul>
                            <!--Restores the context from the secondary query loop back to the main loop-->
                            <?php wp_reset_postdata(); ?>

                            <?php else : ?>
                            <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
                            <?php endif; ?>




                            <nav class="navigation pagination">
                                <p>hej</p>
                                <!-- show pagination-->
                                <?php echo paginate_links(); ?>

                            </nav>


                        </div>


                        <aside id="secondary" class="col-xs-12 col-md-3">
                            <div id="sidebar">
                                <?php dynamic_sidebar( 'sidebar-1' ); ?>
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
                                        <h2 style="color: #f3f3f3">Sidor</h2>
                                        <?php wp_nav_menu( array(
                                 'theme_location' => 'sidebarMenu'));?>
                                </li>
                                </ul>
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
                                            <a href=> <?php echo get_the_category_list(", "); ?> </a>
                                        </li>
                                        <li class="cat-item">

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