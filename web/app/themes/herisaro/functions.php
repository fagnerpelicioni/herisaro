<?php
/**
 * Sage includes
 *
 * The $sage_includes array determines the code library included in your theme.
 * Add or remove files to the array as needed. Supports child theme overrides.
 *
 * Please note that missing files will produce a fatal error.
 *
 * @link https://github.com/roots/sage/pull/1042
 */
$sage_includes = [
  'lib/assets.php',    // Scripts and stylesheets
  'lib/extras.php',    // Custom functions
  'lib/setup.php',     // Theme setup
  'lib/titles.php',    // Page titles
  'lib/wrapper.php',   // Theme wrapper class
  'lib/customizer.php' // Theme customizer
];

foreach ($sage_includes as $file) {
  if (!$filepath = locate_template($file)) {
    trigger_error(sprintf(__('Error locating %s for inclusion', 'sage'), $file), E_USER_ERROR);
  }

  require_once $filepath;
}
unset($file, $filepath);

function wpdocs_custom_excerpt_length( $length ) {
    return 20;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );


// Register Custom Post Type
function products_post_type() {

	$labels = array(
		'name'                  => _x( 'Produtos', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Produto', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Produtos', 'text_domain' ),
		'name_admin_bar'        => __( 'Produto', 'text_domain' ),
		'archives'              => __( 'Item Archives', 'text_domain' ),
		'attributes'            => __( 'Item Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Product:', 'text_domain' ),
		'all_items'             => __( 'Todos os Produtos', 'text_domain' ),
		'add_new_item'          => __( 'Adicionar novo Produto', 'text_domain' ),
		'add_new'               => __( 'Novo Produto', 'text_domain' ),
		'new_item'              => __( 'Novo Produto', 'text_domain' ),
		'edit_item'             => __( 'Editar Produto', 'text_domain' ),
		'update_item'           => __( 'Atualizar Produto', 'text_domain' ),
		'view_item'             => __( 'Visualizar Produto', 'text_domain' ),
		'view_items'            => __( 'Visualizar Produtos', 'text_domain' ),
		'search_items'          => __( 'Procurar Produtos', 'text_domain' ),
		'not_found'             => __( 'Sem Produtos', 'text_domain' ),
		'not_found_in_trash'    => __( 'Sem Produtos', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
		'items_list'            => __( 'Items list', 'text_domain' ),
		'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Produto', 'text_domain' ),
		'description'           => __( 'Produtos artesanais', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'custom-fields', ),
		'taxonomies'            => array( 'roupa', 'acessorio', 'decoracao' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'produto', $args );

}
add_action( 'init', 'products_post_type', 0 );
