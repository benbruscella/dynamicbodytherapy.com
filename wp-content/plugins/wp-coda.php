<?php

/*

Plugin Name: WP CODA
Plugin URI: http://greg-j.com/wp-coda
Description: This plugin is essential for the WP CODA template to display galleries properly. (It is <u>heavily</ul> based on the <a href="http://justintadlock.com/archives/2008/04/13/cleaner-wordpress-gallery-plugin">Cleaner Gallery</a> plugin by Justin Tadlock) 
Version: 1.0
Author: Greg Johnson
Author URI: http://greg-j.com
License: GPL

*/

function jt_gallery_shortcode($attr)
{
	global $post;

	// We're trusting author input, so let's at least make sure it looks like a valid orderby statement
	if(isset($attr['orderby']))
	{
		$attr['orderby'] = sanitize_sql_orderby( $attr['orderby'] );
		if ( !$attr['orderby'] )
			unset( $attr['orderby'] );
	}
	extract(shortcode_atts(array(
		'orderby' => 'menu_order ASC, ID ASC',
		'id' => $post->ID,
		'itemtag' => 'dl',
		'icontag' => 'dt',
		'captiontag' => 'dd',
		'columns' => 3,
		'size' => 'thumbnail',
	), $attr));

	$id = intval($id);
	$attachments = get_children( array('post_parent' => $id, 'post_status' => 'inherit', 'post_type' => 'attachment', 'post_mime_type' => 'image', 'order' => $order, 'orderby' => $orderby) );
	$rel = "";
	
	// WP 2.5 compatibility
	//$attachments = get_children("post_parent=$id&post_type=attachment&post_mime_type=image&orderby={$orderby}");

	if(empty($attachments))
	{
		return '';
	}
	
	if(is_feed())
	{
		$output = "\n";
		foreach ( $attachments as $id => $attachment )
			$output .= wp_get_attachment_link($id, $size, true) . "\n";
		return $output;
	}

	$listtag = tag_escape($listtag);
	$itemtag = tag_escape($itemtag);
	$captiontag = tag_escape($captiontag);
	$columns = intval($columns);
	$itemwidth = $columns > 0 ? floor(100/$columns) : 100;

// Remove the style output in the middle of the freakin' page
// This needs to be added to the header (width applied through CSS but limits it a bit)

// Open gallery
	$output = apply_filters('gallery_style', "<div class=\"gallery\">");

// If there is more than 1 image in the gallery, group them together by post ID
	if(count($attachments) > 1)
	{
		$rel = " rel=\"group$post->ID\"";
	}

// Loop through each gallery item	
	foreach ( $attachments as $id => $attachment )
	{
	// Larger image URL (Lightbox/Thickbox)
		$link = wp_get_attachment_url($id);
	// Returns array
		$img = wp_get_attachment_image_src($id, $size);
		$img = $img[0];
	// If no caption is defined, set the title and alt attributes to title
		$title = $attachment->post_excerpt;
		if($title == '') $title = $attachment->post_title;
	// Output link
		$output .= "\t<a$rel href=\"$link\" title=\"$title\">";
	// Output image
		$output .= "<img src=\"$img\" alt=\"$title\" />";
	// Close link
		$output .= "</a>\n";
	// Check if user wants to always show the caption
		if($cap_always == true) $caption = $attachment->post_title;
		else $caption = $attachment->post_excerpt;
	}
// Close gallery
	$output .= "\n</div>\n";
	return $output;
}


// Remove original gallery shortcode
	remove_shortcode(gallery);

// Add a new shortcode
	add_shortcode('gallery', 'jt_gallery_shortcode');

?>