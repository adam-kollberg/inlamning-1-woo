<?php
/* Template Name: single */ 
?>

<?php get_header(); ?>
<!--Looping through according to the loop-->


<?php while (have_posts()) {
    the_post(); 
    
    ?>
<main>
    <section>
        <div class="container">
            <div class="row">
                <div id="primary" class="col-xs-12 col-md-9">
                    <article>
                        <img src="<?php echo get_the_post_thumbnail_url();?> " />


                        <h2 class="title">

                            <?php the_title();  ?>
                        </h2>


                        <ul class=" meta">
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

                        <p>
                            <!--getting the content dynamic-->
                            <?php the_content(); ?>
                        </p>
                    </article>
                    <?php 
 } ?>

                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>