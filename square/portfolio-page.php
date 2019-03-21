<?php
/* Template Name: Portfolio-Page */
?>


<?php get_header(); ?>

<div class="portfolio_box">
    <div class="wrapper">
        <ul class="portfolio">
            <li class="portfolio_title">
                <h3>
                     <?php the_title(); ?>
                </h3>
                <p class="portfolio_title_item">
                    gallery three
                </p>
                 <?php
                           while ( have_posts() ) : the_post(); ?>
                             <div class="entry-content-page">
                               <?php the_content(); ?>
                             </div>
                           <?php endwhile;
                             wp_reset_query(); ?>
            </li>

             <?php
                  $args = array('post_type'=>array('posts', 'photo'));
                  query_posts($args);
                  while ( have_posts() ) : the_post();
                  ?>
            <li>
                <img src="<?php bloginfo('template_url'); ?>/img/potfolio/actor1.jpg" alt="actor">
            </li>
            <li>
                <img src="<?php bloginfo('template_url'); ?>/img/potfolio/actor2.jpg" alt="actor">
            </li>
            <li>
                <img src="<?php bloginfo('template_url'); ?>/img/potfolio/actor3.jpg" alt="actor">
            </li>
            <li>
                <img src="<?php bloginfo('template_url'); ?>/img/potfolio/actor4.jpg" alt="actor">
            </li>
            <li>
                <img src="<?php bloginfo('template_url'); ?>/img/potfolio/actor5.jpg" alt="actor">
            </li>
            <li>
                <img src="<?php bloginfo('template_url'); ?>/img/potfolio/actor6.jpg" alt="actor">
            </li>
            <li>
                <img src="<?php bloginfo('template_url'); ?>/img/potfolio/actor7.jpg" alt="actor">
            </li>
            <li>
                <img src="<?php bloginfo('template_url'); ?>/img/potfolio/actor8.jpg" alt="actor">
            </li>

            <?php endwhile; ?>

        </ul>
        <button class="arrow_up">
            <i class="fas fa-caret-up"></i>
        </button>

    </div>
</div>



<?php get_footer();?>