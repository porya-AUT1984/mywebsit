<?php 
/*
Template Name: Home Page
*/
?>


<?php get_header(); ?>


<div class="secSpe">
    
   <i class="ion-gear-b"></i> <p>My <span>Specialties</span> </p>
    
</div>


<section class="special">
   
    
    <div class="row box1">
        
        <div class="col span-1-of-3">
           
        <i class="ion-social-wordpress"></i>
        <h2><?php the_field("heading_one"); ?></h2>
        <p><?php the_field("description_one"); ?></p>   
            
            
        </div>
        
        
        <div class="col span-1-of-3">
         <i class="ion-iphone"></i>
        <h2><?php the_field("heading_two"); ?></h2>
        <p><?php the_field("description_two"); ?></p>      
            
        </div>
        
        
        <div class="col span-1-of-3">
        <i class="ion-chatbubbles"></i>
        <h2><?php the_field("heading_three"); ?></h2>
        <p><?php the_field("description_three"); ?></p>     
            
        </div>
        
        
    </div> <!--Row Ends Here-->
    
    
    
    
    <div class="row box1">
        
        <div class="col span-1-of-3">
           
        <i class="ion-email-unread"></i>
        <h2><?php the_field("heading_four"); ?></h2>
        <p><?php the_field("description_four"); ?></p>   
            
            
        </div>
        
        
        <div class="col span-1-of-3">
         <i class="ion-ios-search-strong"></i>
        <h2><?php the_field("heading_five"); ?></h2>
        <p><?php the_field("description_five"); ?></p>      
            
        </div>
        
        
        <div class="col span-1-of-3">
        <i class="ion-android-contacts"></i>
        <h2><?php the_field("heading_six"); ?></h2>
        <p><?php the_field("description_six"); ?></p>     
            
        </div>
        
        
    </div> <!--Row Ends Here-->
    
    
</section> <!--Section My Specialties Ends Here-->



<!--My Packages Section Starts here -->


<div class="secSpe">
    
   <i class="ion-cube"></i> <p>My <span>Packages</span> </p>
    
</div>

<p class="packageP"><?php the_field('mypackages_title'); ?></p>

<section class="packages">
   
   
   <div class="row">
      
      
      <div class="col span-1-of-3 box2">
         <p><?php the_field('box_one_price'); ?></p>
         <h3><?php the_field('box_one_title'); ?></h3>
         
         <ul>
           
           <?php the_field('box_one_description'); ?>
            
            <li><a href="http://localhost/wordpress/contact/">inquery</a></li>

    
        </ul>
          
      </div>
      
      
      
            <div class="col span-1-of-3 box3">
         <p> <?php the_field('box_two_price'); ?></p>
         <h3><?php the_field('box_two_title'); ?></h3>
 <ul>
            <?php the_field('box_two_description'); ?>
            <li><a href="http://localhost/wordpress/contact/">inquery</a></li>

    
        </ul>
          
      </div>
      
      
      
            <div class="col span-1-of-3 box4">
         <p><?php the_field('box_three_price'); ?></p>
         <h3><?php the_field('box_three_title'); ?></h3>
         <ul>
            <?php the_field('box_three_description'); ?>

            <li><a href="http://localhost/wordpress/contact/">inquery</a></li>

    
        </ul>
          
      </div>
       
       
       
   </div>
    
    
    
    
</section>
<!--My Packages Section Ends here -->
 
 
 
 
 
 
 
<!--My Portfolio section starts here-->


<div class="secSpe porTitle">
    
   <i class="ion-briefcase"></i> <p>My <span>Portfolio</span> </p>
    
</div>

<section class="secPort">
  
  <?php $loop = new WP_query(array(

    'post_type' => 'portfolio',
    'orderby'=> 'post_id',
    'order' => 'DSC',
    'posts_per_page' => 50




)); ?>
   
   <?php if($loop->have_posts() ) : ?>
   <?php while ($loop->have_posts() ) : $loop->the_post(); ?>
   

   
      
   <div class="row portRow1">
      
      
      <div class="col span-1-of-4">
       
       <?php $image = get_field('image_one'); ?>
       <?php if(!empty($image)) : ?>
        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
        <?php endif; ?>
        
        <p><?php the_field('title_one'); ?></p>
        <?php the_field('link_one'); ?>
      </div>
      
          <div class="col span-1-of-4">
         <?php $image = get_field('image_two'); ?>
       <?php if(!empty($image)) : ?>
        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
        <?php endif; ?>
             <p><?php the_field('title_two'); ?></p>
        <?php the_field('link_two'); ?>
      </div>
      
          <div class="col span-1-of-4">
       <?php $image = get_field('image_three'); ?>
       <?php if(!empty($image)) : ?>
        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
        <?php endif; ?>
              <p><?php the_field('title_three'); ?></p>
        <?php the_field('link_three'); ?>
      </div>
      
          <div class="col span-1-of-4">
        <?php $image = get_field('image_four'); ?>
       <?php if(!empty($image)) : ?>
        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
        <?php endif; ?>
             <p><?php the_field('title_four_'); ?></p>
        <?php the_field('link_four'); ?>
      </div>
       

   </div> <!--Row Ends Here-->
   
    
      <?php endwhile; ?>
   <?php endif; ?>
   
   
</section>

<!--My Portfolio section Ends here-->






<!--About me section stars here-->


<div class="secSpe aboutTitle">
    
   <i class="ion-person-stalker"></i> <p>About <span>Me</span> </p>
    
</div>

<section class="aboutSec">
   
   
   <div class="row aboutBox">
       
       <div class="col span-3-of-3">
         
         <?php $image1 = get_field('my_image', 21); ?>
         <?php if(!empty($image1)) : ?>
         <img src="<?php echo $image1['url']; ?>" alt="<?php echo $image1['alt']; ?>">
         <?php endif; ?>
          
          
          <p class="aboutP1"><?php the_field('paragraph_one', 21); ?> </p>
          
          <p class="aboutP2"><?php the_field('paragraph_two', 21); ?></p>
           
       </div>
       
   </div>
    
    
</section>

<!--About me section ends here-->



<!--Contact Me Section Strts Here-->


<section class="contactSec">
   
   <div class="row formControl">
     
     <p class="contactP">contact me</p>
      
      
      <?php echo do_shortcode('[contact-form-7 id="90" title="contact"]'); ?>
       

       
       
   </div>
    
    
    
</section>

<!--Contact Me Section Ends Here-->


<!---->


<?php get_footer(); ?>