<?php
/* 
Template Name: Special layout
*/

get_header();

if(have_posts()):
	while (have_posts()): the_post(); ?>
	
	<article class="post page">
	<h2><?php the_title();?></h2>
	<!-- info-box -->
	<div class="info-box">
		<h4>Disclaimer title</h4>
		<p> hiuydawjbdjhagwqwandemngjgdaf </p>
	</div> <!-- /info-box -->
	
	<?php the_content();?>
	</article>
	
	<?php 
	endwhile;
	
	else:
	echo '<p>no content found</p>';
	
	endif;
get_footer();
?>