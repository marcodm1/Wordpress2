<?php get_header(); ?>

<main class="">
  <section class="">
  <?php 
    if ( have_posts() ) : while ( have_posts() ) : the_post(); 
  ?>
    <article>
      <header>
        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
        By: <?php the_author(); ?>
      </header>
      <div>
          <?php the_content(); //the_excerpt(); ?>
      </div>
    </article>
  <?php 
    endwhile; else : 
  ?>
  <article>
    <p>No se han encontrado posts</p>
  </article>
  <?php 
    endif; 
  ?>

  </section><?php get_sidebar(); ?>
</main>

<?php get_footer(); ?>