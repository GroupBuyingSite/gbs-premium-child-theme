<?php
	get_header();
	?>

	<div id="merchant_page" class="clearfix">
	
		<div id="content_wrap" class="clearfix">
			
		<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
			
			
			<div id="content" class="merchant clearfix">
			
				<div class="page_title clearfix">
					<h1 class="main_heading gb_ff"><span class="title_highlight"><?php the_title() ?></span></h1>
				</div>

				<?php the_content(); ?>
			</div><!-- #content -->
		
		<?php endwhile; // end of the loop. ?>

		<div class="sidebar">

			<?php if ( gb_on_account_page() ): ?>
				<?php get_template_part( 'inc/account-sidebar' ); ?>
			<?php endif; ?>
			<?php dynamic_sidebar( 'account-sidebar' ); ?>

		</div>
			
		</div><!-- #content_wrap -->	
		
	</div><!-- #single_deal -->
	
<?php get_footer(); ?>
