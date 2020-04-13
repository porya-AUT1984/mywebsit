<?php get_header(); ?>


<div class="row">
    
    
           
       <?php if(have_posts() ) : ?>
       
       <?php while(have_posts() ) : the_post(); ?>
       
       
       <div class="permalink">
          <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
           
       </div>
       
       
       
       
       <div class="meta">
          
          Posted By <?php the_author(); ?> On <?php the_time('F j, Y g:i a'); ?>
           
       </div>
       
       
       
       <div class="thumbnail">
          
          <?php if(has_post_thumbnail() ) : ?>
          <?php the_post_thumbnail(); ?>
          <?php endif; ?>
           
       </div>
       
       
       
       <div class="content">
          
        <?php the_content(); ?>  
           
       </div>
       
       
       
       <?php endwhile; ?>
       <?php endif; ?>
    
    
    
</div>


<?php get_footer(); ?>