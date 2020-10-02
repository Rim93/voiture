<?php get_header(); ?>
<div class="projets">
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
<article class="projet">
<?php the_post_thumbnail( 'thumbnail' ); ?>
<h1 class="title">
<a href="<?php the_permalink(); ?>">
<?php the_title(); ?>
</a>
</h1>
<?php the_terms( $post->ID, 'marque', 'Marque : ' ); ?><br>
<?php the_field('dimension'); ?>
<?php the_field('couleur'); ?>
<?php the_field('cylindre'); ?>
<?php the_field('annee'); ?>


<div class="content">
<?php the_content(); ?>
</div>
</article>
<?php endwhile; ?>
<?php endif; ?>
</div>s

<?php get_footer(); ?>