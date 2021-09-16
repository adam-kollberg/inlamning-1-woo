<?php /* Template Name: Undersida */ ?>

<!DOCTYPE html>
<html>
<head>
<?php wp_head(); ?>
	<meta charset="UTF-8" />
	<title <?php the_title(); ?> ></title>

</head>
<body>

	<div id="wrap">

	<?php get_header(); ?>

		<main>
			<section>
				<div class="container">
					<div class="row">
						<div id="primary" class="col-xs-12 col-md-9">
							<h1> <?php the_title();  ?></h1>

							<?php echo the_content(); ?>
							
						</div>
						<aside id="secondary" class="col-xs-12 col-md-3">
							<ul class="side-menu">
							<?php wp_nav_menu( array(
                                 'theme_location' => 'secondMenu', 'menu_class' => "side-menu" ));?>
							
							</ul>
						</aside>
					</div>
				</div>
			</section>
		</main>
		<?php get_footer(); ?>