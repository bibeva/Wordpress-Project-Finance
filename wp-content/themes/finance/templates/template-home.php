<?php
/*
Template Name: Homepage
*/

get_header(); ?>

<!-- hero block -->
<section class="heroBlock">
  <?php 
    $args = array( 'post_type' => 'hero' );
    $loop = new WP_Query( $args );
    while ( $loop->have_posts() ) : $loop->the_post();
  ?> 	
  <div class="holder">
    <?php the_post_thumbnail('full'); ?>
    <h2><?php the_title(); ?></h2>
  </div>
  <?php endwhile; ?>
</section>

<!-- about block -->
<section class="block aboutBlock">
  <div class="container">
    <?php $the_query = new WP_Query( 'page_id=10' ); ?>
    <?php while ($the_query -> have_posts()) : $the_query -> the_post();  ?>
      <div class="holder">
        <div class="image">
          <?php the_post_thumbnail('medium_large'); ?>
        </div>
        <div class="content">
          <h3><?php the_title(); ?></h3>
          <p><?php echo wp_trim_words( get_the_content(), 50, '' ); ?></p>
          <a href="<?php echo get_page_link(); ?>" class="btn">Read More</a>
        </div>
      </div>
    <?php endwhile;?>
  </div>
</section>

<!-- services block -->
<section class="block grayBg servicesBlock">
  <div class="container">
    <h2>Our Services</h2>
    <div class="cols">
      <?php 
        $args = array( 'post_type' => 'our_services','posts_per_page' =>  6);
        $loop = new WP_Query( $args );
        while ( $loop->have_posts() ) : $loop->the_post();
      ?> 	
      <div class="col">
        <?php 
          $service_icon = get_post_meta( get_the_ID(), 'Service Icon', true);

          echo '<div class="icon">' . $service_icon . '</div>';
        ?>
        <h3><?php the_title(); ?></h3>
        <?php the_content(); ?>
      </div>
      <?php endwhile; ?>
    </div>
  </div>
</section>

<!-- contact banner block -->
<section class="block contactBannerBlock">
  <div class="container">
    <?php 
      $args = array( 'post_type' => 'contact_details' );
      $loop = new WP_Query( $args );
      while ( $loop->have_posts() ) : $loop->the_post();
    ?> 	
    <div class="holder">
      <?php 
        $contact_title = get_post_meta( get_the_ID(), 'Contact Title', true);
        $contact_content = get_post_meta( get_the_ID(), 'Contact Content', true);
        $contact_button_url = get_post_meta( get_the_ID(), 'Contact Button URL', true);

        echo '<div class="content"><h3>' . $contact_title . '</h3>';
        echo '<p>' . $contact_content . '</p></div>';
        echo '<div class="buttonBlock"><a class="btn" href="'. $contact_button_url .'">Contact Us</a></div>';
      ?>
    </div>
    <?php endwhile; ?>
  </div>
</section>

<!-- testimonials block -->
<section class="block testimonialBlock">
  <div class="container">
    <h2>Testimonials</h2>
    <div class="testimonialHolder">
      <?php 
        $args = array( 'post_type' => 'testimonial' );
        $loop = new WP_Query( $args );
        while ( $loop->have_posts() ) : $loop->the_post();
      ?> 	
      <div class="holder">
        <div class="image">
          <?php the_post_thumbnail('full'); ?>
        </div>
        <h3><?php the_title(); ?></h3>
        <?php 
          $testimonial_designation = get_post_meta( get_the_ID(), 'Testimonial Designation', true);
          echo '<span class="designation">' . $testimonial_designation . '</span>';
        ?>  
        <?php the_content(); ?>
      </div>
      <?php endwhile; ?>
    </div>
  </div>
</section>

<?php get_template_part( 'template-parts/footer-menus-widgets' ); ?>

<?php get_footer(); ?>