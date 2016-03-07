<?php

get_header();

$post = get_post();
setup_postdata($post);
?>
<section id="<?php the_ID();?>" class="container content-section">
	<div class="row">
	<div class="col-lg-8 col-lg-offset-2">
		<?php the_title( '<h2 class="entry-title">', '</h2>' ); ?>
		<?php if(has_post_thumbnail()) {?>
			<div class="entry-image"><?php the_post_thumbnail('large'); ?></div>
		<?php }?>

		<div class="entry-content"><?php the_content();?></div>
	</div>
	</div>
</section>

<?php get_footer(); ?>
