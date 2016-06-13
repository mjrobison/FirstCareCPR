<?php get_header(); ?>
	
<main>
<div class="container">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			

				<?php the_content(); ?>

				<?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>


		</div>
		

	<?php endwhile; endif; ?>
		</div>
</main>

<?php get_footer(); ?>