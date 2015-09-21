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
		<p> Կան Lorem Ipsum-ի շատ տարբերակներ,
			սակայն շատերը աղավաղվել են տարաբնույթ,
			երբեմն նույնիսկ լատիներենից շատ հեռու և
			անհավանական բառերի և հումորի ավելացման
			արդյունքում: </p>

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
