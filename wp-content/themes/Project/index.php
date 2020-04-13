<?php get_header(); ?>



<section class="secblog">
    
    
    <p>Blog</p>
    
    
</section>




<div class="row">
    
    
    <div class="col span-2-of-3 blogbox">
       
       
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
          
          <?php the_excerpt(); ?>
          <a href="<?php the_permalink(); ?>">Read More....</a>
           
       </div>
       
       
       <?php endwhile; ?>
       <?php endif; ?>
       
        
    </div>
    
    
    
    
    
    
    
    <div class="col span-1-of-3 blogbox">
       
       <?php if(is_active_sidebar('alpha') ) : ?>
       <?php dynamic_sidebar('alpha'); ?>
       <?php endif; ?>
       
       
        <?php if(is_active_sidebar('beta') ) : ?>
       <?php dynamic_sidebar('beta'); ?>
       <?php endif; ?>
       
        
    </div>
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
</div>














<?php get_footer(); ?>