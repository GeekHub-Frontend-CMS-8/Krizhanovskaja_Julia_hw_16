<?php
/* Template Name: Blog-Page */
?>

<?php get_header(); ?>

<?php
$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
$args = array(
  'posts_per_page' => 6,
  'paged' => $paged,
  'post_type' => 'blog'
);
$custom_query = new WP_Query( $args );
?>

<div class="blog-box">
    <div class="wrapper">
        <ul class="blog">

        <?php while ( $custom_query->have_posts() ) : $custom_query->the_post(); ?>

            <li class="blog_item">

                <?php the_post_thumbnail("large", array('class' => "blog-img")); ?>

                <div class="blog_item_elem">
                    <h3 class="blog-heading">

                        <?php the_title(); ?>

                    </h3>

                       <?php the_content(); ?>

                    <a href="<?php the_permalink(); ?>" class="blog-btn">

                        read more

                    </a>
                    <div class="blog_atribute">
                        <i class="far fa-calendar"></i>
                        <span class="blog_date">

                            <?php echo the_date(); ?>

                        </span>
                        <i class="far fa-comment"></i>
                        <span>
                            24
                        </span>
                    </div>

                    <?php endwhile; ?>

                </div>
            </li>

<?php if (function_exists("pagination")) {
    pagination($custom_query->max_num_pages);
  } ?>
        <a class="arrow_up" href="#">
            <i class="fas fa-caret-up"></i>
        </a>
    </div>
</div>

<?php get_footer(); ?>
