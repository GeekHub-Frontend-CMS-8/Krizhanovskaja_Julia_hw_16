<?php

function square_scripts() {
	wp_enqueue_style( 'square-main-style', get_template_directory_uri() . '/css/main.css');

	wp_enqueue_script( 'square-header-menu', get_template_directory_uri() . '/js/header-menu.js', array(), '20151215', true );

	wp_enqueue_script( 'square-index', get_template_directory_uri() . '/js/index.js', array(), '20151215', true );

//	wp_enqueue_script( 'hw_18-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'square_scripts' );

//регистрируем новое меню
add_action( 'after_setup_theme', 'theme_register_nav_menu' );
function theme_register_nav_menu() {
	register_nav_menu( 'header-menu', 'header-menu' );
}
add_theme_support( 'post-thumbnails' );

function create_news_post_type() {
  register_post_type( 'new',
    array(
      'labels' => array(
        'name' => __( 'news' ),
        'singular_name' => __( 'new' ),
        'add_new'     => __('Add new', 'new'),
        'add_new_item' =>__('Add new news'),
        'edit_item'   =>__('Edit news'),
      ),
      'public' => true,
      'has_archive' => true,
      'supports' => array ('title','editor', 'thumbnail'),
      'query_var' => false
    )
  );

   register_post_type( 'portfolio',
      array(
        'labels' => array(
          'name' => __( 'Portfolio' ),
          'singular_name' => __( 'Portfolio' ),
          'add_new'     => __('Add portfolio', 'new'),
          'add_new_item' =>__('Add new potfolio'),
          'edit_item'   =>__('Edit portfolio'),
        ),
        'public' => true,
        'has_archive' => true,
        'supports' => array ('editor', 'thumbnail'),
        'query_var' => false
      )
    );

    register_post_type( 'photo',
          array(
            'labels' => array(
              'name' => __( 'Photos' ),
              'singular_name' => __( 'Photo' ),
              'add_new'     => __('Add new'),
              'add_new_item' =>__('Add new photo'),
              'edit_item'   =>__('Edit photo'),
            ),
            'public' => true,
            'has_archive' => true,
            'supports' => array ('title', 'editor', 'thumbnail'),
            'query_var' => false
          )
        );

         register_post_type( 'partner',
              array(
                'labels' => array(
                  'name' => __( 'Partners' ),
                  'singular_name' => __( 'Partner' ),
                  'add_new'     => __('Add new'),
                  'add_new_item' => __('Add new partner'),
                  'edit_item' => __('Edit partner')
                ),
                'public' => true,
                'has_archive' => true,
                'supports' => array ('title','editor', 'thumbnail'),
                'query_var' => false
              )
            );

         register_post_type( 'blog',
               array(
                 'labels' => array(
                   'name' => __( 'Blogs' ),
                   'singular_name' => __( 'Blog' ),
                   'add_new'     => __('Add new'),
                   'add_new_item' => __('Add new blog'),
                   'edit_item' => __('Edit blog')
                 ),
                 'public' => true,
                 'has_archive' => true,
                 'supports' => array ('title','editor', 'thumbnail'),
                 'query_var' => false
               )
             );

}
add_action( 'init', 'create_news_post_type' );

 function getNews() {
    $news = array(
      'numberposts' => 3,
      'orderby'     => 'date',
      'order'       => 'DESC',
      'post_type'   => 'news',
    );
    return get_posts($news);
  }

function getBlog() {
    $client = array(
      'orderby'     => 'date',
      'order'       => 'DESC',
      'post_type'   => 'blog',
    );
    return get_posts($blog);
  }
function getPhoto() {
    $photo = array(
      'orderby'     => 'date',
      'order'       => 'DESC',
      'post_type'   => 'photo',
    );
    return get_posts($photo);
  }

function getPartner() {
    $partner = array(
      'orderby'     => 'date',
      'order'       => 'DESC',
      'post_type'   => 'partner',
    );
    return get_posts($partner);
  }

 function pagination($pages = '', $range = 4)
  {
    $showitems = ($range * 2)+1;
    global $paged;
    if(empty($paged)) $paged = 1;
    if($pages == '')
    {
      global $wp_query;
      $pages = $wp_query->max_num_pages;
      if(!$pages)
      {
        $pages = 1;
      }
    }
    if(1 != $pages)
        {
          echo "<div class=\"pagination\">";
          if($paged > 1) echo "<a href='".get_pagenum_link($paged - 1)."'>Prev</a>";
          for ($i=1; $i <= $pages; $i++)
          {
            if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ))
            {
              echo ($paged == $i)? "<span class=\"current\">".$i."</span>":"<a href='".get_pagenum_link($i)."' class=\"inactive\">".$i."</a>";
            }
          }
          if ($paged < $pages) echo "<a href=\"".get_pagenum_link($paged + 1)."\">Next</a>";
          echo "</div>\n";
        }
      }
