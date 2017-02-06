<?php
// IMAGES

 add_image_size('slider', 1400, 500, TRUE );
 add_image_size('service', 450, 450, TRUE );
 add_image_size('product', 601, 999, FALSE );
 add_image_size('galleryItem', 200, 200, TRUE );


// MENUS
function register_my_menus() {
  register_nav_menus(
    array(
      'mainMenu' => __( 'Menu principal' ),
      'footerMenu' => __( 'Menu du footer' ),
      'footerMenuProduct' => __( 'Menu du footer (Produits)' )

    )
  );
}

function cleanMenu( $theme_location ) {

        $links = array();
        $a = get_nav_menu_locations();

        if(isset($a[$theme_location])){

              foreach(wp_get_nav_menu_items($a[$theme_location]) as $obj){
                    $o = new \stdClass();
                    $o->pageId    = intval( $obj->object_id );
                    $o->id        = intval( $obj->ID );
                    $o->label     = $obj->title;
                    $o->url       = $obj->url;
                    $o->classes   = $obj->classes;
                    $o->childs    = array();

                    if($o->pageId === get_the_ID()){
                        $o->isCurrent = true;
                    }
                    else{
                        $o->isCurrent = false;
                    }

                    if($obj->menu_item_parent === "0") $links[$obj->ID] = $o;
                    else
                    {
                          $parentId =  intval($obj->menu_item_parent);
                          $links[$parentId]->childs[$obj->ID] = $o;
                    }
              }
        }
        return $links;
}


function getLangMenu() {

        $links = array();
		$a = icl_get_languages('skip_missing=N&orderby=KEY&order=DIR&link_empty_to=str');

		foreach ($a as $lang){
			$o = new stdClass();
			$o->url = $lang['url'];
			$o->name = $lang['native_name'];
			$o->code = $lang['language_code'];
			$o->flag = $lang['country_flag_url'];
			$o->isActive =  $lang['active'] === 1 ? true : false;
			$links[] = $o;
		}

        return $links;
}


add_action( 'init', 'register_my_menus' );

// POSTTYPES
add_theme_support( 'post-thumbnails' );

if ( ! function_exists( 'create_post_type' ) ) :

		register_post_type( 'config',
							array(
									'labels' => array(
														'name' => __( 'Configuration' ),
														'singular_name' => __( 'config' ),
													),
									'supports' => array(
														'title', 'editor'
													),
                                    'public'             => false,
                            		'publicly_queryable' => false,
                            		'show_ui'            => true,
                            		'show_in_menu'       => true,
									'menu_icon' => 'dashicons-admin-generic',
									'has_archive' => false
							));

        register_post_type( 'product',
							array(
									'labels' => array(
														'name' => __( 'Produits' ),
														'singular_name' => __( 'produit' ),
													),
									'supports' => array(
														'title', 'editor'
													),
									'public' => true,
									'menu_icon' => 'dashicons-cart',
                                    'rewrite'            => array( 'slug' => 'produit' ),
									'has_archive' => true
							));
endif;


// UTILS
function theme_url($s,$echo = true){
      $s = substr($s, 0, 1) !== '/' ? '/' . $s : $s;
      if($echo) echo(get_stylesheet_directory_uri() . $s);
      return get_stylesheet_directory_uri() . $s;
}

function cleanTel($s){
      $s = str_replace("+", "00", $s);
      $s = preg_replace("/[^0-9,.]/", "", $s);
      return $s;
}
