<?php
/*
 Template Name: Home
 *
*/
?>

<?php get_header(); ?>

			<div id="content">

				<div id="inner-content" class="cf">

					<main id="main" class="cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							<?php // Must use ACF PRO Plugin (Add JSON script for basic builder blueprint) ?>
							<?php load_template(TEMPLATEPATH . '/library/modules/builder/builder.php'); ?>

						<?php endwhile; else : ?>

							<article id="post-not-found" class="hentry cf">
								<header class="article-header">
									<h1><?php _e( 'Oops, Post Not Found!', 'screenpartner' ); ?></h1>
								</header>
								<section class="entry-content">
									<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'screenpartner' ); ?></p>
								</section>
							</article>

						<?php endif; ?>

					</main>

				</div>

			</div>


<?php get_footer(); ?>
