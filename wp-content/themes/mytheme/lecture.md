#Working with theme

### creating a custome post type
when creating a customer post you write some code the the function.php and i will post them below

```
/*
	==========================================
	 Custom Post Type
	==========================================
*/
function awesome_custom_post_type (){
	
	$labels = array(
		'name' => 'Portfolio',
		'singular_name' => 'Portfolio',
		'add_new' => 'Add Item',
		'all_items' => 'All Items',
		'add_new_item' => 'Add Item',
		'edit_item' => 'Edit Item',
		'new_item' => 'New Item',
		'view_item' => 'View Item',
		'search_item' => 'Search Portfolio',
		'not_found' => 'No items found',
		'not_found_in_trash' => 'No items found in trash',
		'parent_item_colon' => 'Parent Item'
	);
	$args = array(
		'labels' => $labels,
		'public' => true,
		'has_archive' => true,
		'publicly_queryable' => true,
		'query_var' => true,
		'rewrite' => true,
		'capability_type' => 'post',
		'hierarchical' => false,
		'supports' => array(
			'title',
			'editor',
			'excerpt',
			'thumbnail',
			'revisions',
		),
		'taxonomies' => array('category', 'post_tag'),
		'menu_position' => 5,
		'exclude_from_search' => false
	);
	register_post_type('portfolio',$args);
}
add_action('init','awesome_custom_post_type');
```
for the file to work and for it to be shown in the admin panel, we have to write some file, which are 
1. single-portfolio.php
2. archieve-portfolio.php

these files is the coined from the normal themes files
the single-portfolio.php is where all the individual post will be rendered while archieve-portfolio.php will show the list of post created

### how to activate the custome post type
after the above code has been included on the funtion file, you can then create your own custom post.
NB: if you create a post with the custom post, the post will not be render on the main page, so what you have to do is to add the custome link from the permalink. 
add it on the nav menu on the admin dashoboard.

## custome taxonomy
it is the same way we create custome post type that we create custom taxonomy. but for it to read in the client side, we have to code it on the single-portfolio.php.
```
<?php echo wp_get_post_terms( $post->ID, 'field' ); ?>
```
the code above will make the post appear on the main page.
