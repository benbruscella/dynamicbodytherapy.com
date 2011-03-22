<?php

// Subscribe Widget
function subscribeWidget()
{
	$settings = get_option("widget_subscribewidget");

	$title = $settings['title'];

?>

		<h3>
        	<span class="subscribe" style="float:none;">
        		<img src="<?php echo bloginfo('template_directory')."/images/rss-trans.png"; ?>" height="16" width="16" alt=""/>&nbsp;<a href="<?php if ( get_option('woo_feedburner_url') <> "" ) { echo get_option('woo_feedburner_url'); } else { echo get_bloginfo_rss('rss2_url'); } ?>" title="Subscribe"><?php echo $title; ?></a>
            </span>
        </h3>		

<?php
}

function subscribeWidgetAdmin() {

	$settings = get_option("widget_subscribewidget");

	// check if anything's been sent
	if (isset($_POST['update_subscribe'])) {
		$settings['title'] = strip_tags(stripslashes($_POST['subscribe_title']));

		update_option("widget_subscribewidget",$settings);
	}

	echo '<p>
			<label for="subscribe_title">Title:
			<input id="subscribe_title" name="subscribe_title" type="text" class="widefat" value="'.$settings['title'].'" /></label></p>';
	echo '<input type="hidden" id="update_subscribe" name="update_subscribe" value="1" />';

}

register_sidebar_widget('Woo - Subscribe', 'subscribeWidget');
register_widget_control('Woo - Subscribe', 'subscribeWidgetAdmin', 400, 200);


// Flickr Widget
function flickrWidget()
{
	$settings = get_option("widget_flickrwidget");

	$id = $settings['id'];
	$number = $settings['number'];

?>

		<h3><span class="flickr"><img src="<?php echo bloginfo('template_directory')."/images/flickr-trans.png"; ?>" height="16" width="16" alt=""/>&nbsp;Flickr Photos</span></h3>
        <div class="flickr_photos">
                            
            <script type="text/javascript" src="http://www.flickr.com/badge_code_v2.gne?count=<?php echo $number; ?>&amp;display=latest&amp;size=s&amp;layout=x&amp;source=user&amp;user=<?php echo $id; ?>"></script>

        </div>
        <div class="fix"></div>

<?php
}

function flickrWidgetAdmin() {

	$settings = get_option("widget_flickrwidget");

	// check if anything's been sent
	if (isset($_POST['update_flickr'])) {
		$settings['id'] = strip_tags(stripslashes($_POST['flickr_id']));
		$settings['number'] = strip_tags(stripslashes($_POST['flickr_number']));

		update_option("widget_flickrwidget",$settings);
	}

	echo '<p>
			<label for="flickr_id">Flickr ID (<a href="http://www.idgettr.com">idGettr</a>):
			<input id="flickr_id" name="flickr_id" type="text" class="widefat" value="'.$settings['id'].'" /></label></p>';
	echo '<p>
			<label for="flickr_number">Number of photos:
			<input id="flickr_number" name="flickr_number" type="text" class="widefat" value="'.$settings['number'].'" /></label></p>';
	echo '<input type="hidden" id="update_flickr" name="update_flickr" value="1" />';

}

register_sidebar_widget('Woo - Flickr', 'flickrWidget');
register_widget_control('Woo - Flickr', 'flickrWidgetAdmin', 400, 200);


// Ad widget
function adsWidget()
{

$img_url = array();
$dest_url = array();


	$numbers = range(1,4); 
	$counter = 0;

if (get_option('woo_ads_rotate')) {
	shuffle($numbers);
}
	
	foreach ($numbers as $number) {	
		$counter++;
		$img_url[$counter] = get_option('woo_ad_image_'.$number);
		$dest_url[$counter] = get_option('woo_ad_url_'.$number);
	}
	
?>
<div class="ads"> 
    <a href="<?php echo "$dest_url[1]"; ?>"><img src="<?php echo "$img_url[1]"; ?>" alt="Ad" /></a>
    <a href="<?php echo "$dest_url[2]"; ?>"><img src="<?php echo "$img_url[2]"; ?>" alt="Ad" /></a>
    <a href="<?php echo "$dest_url[3]"; ?>"><img src="<?php echo "$img_url[3]"; ?>" alt="Ad" /></a>
    <a href="<?php echo "$dest_url[4]"; ?>"><img src="<?php echo "$img_url[4]"; ?>" alt="Ad" /></a>
</div>
<!--/ads -->
<?php
}
register_sidebar_widget('Woo - Ads', 'adsWidget');


// Show a testimonial from a client
function testimonialWidget() {

	$settings = get_option("widget_testimonialwidget");

	$title = $settings['title'];
	$text = $settings['text'];
	$by = $settings['by'];

?>
	<div class="widget">
    
        <h3><?php echo $title; ?></h3>
        <div class="quote fl"></div>
        <blockquote>
            <p><?php echo $text; ?></p>
        </blockquote>
        <cite>- <?php echo $by; ?></cite> 
    
	</div>
<?php
}


// Testimonial widget
function testimonialwidgetAdmin() {

	$settings = get_option("widget_testimonialwidget");

	// check if anything's been sent
	if (isset($_POST['update_testimonial'])) {
		$settings['title'] = strip_tags(stripslashes($_POST['testimonial_title']));
		$settings['text'] = strip_tags(stripslashes($_POST['testimonial_text']));
		$settings['by'] = strip_tags(stripslashes($_POST['testimonial_by']));

		update_option("widget_testimonialwidget",$settings);
	}

	echo '<p>
			<label for="testimonial_title">Title:
			<input id="testimonial_title" name="testimonial_title" type="text" class="widefat" value="'.$settings['title'].'" /></label></p>';
	echo '<p>
			<label for="testimonial_text">Text:
			<input id="testimonial_text" name="testimonial_text" type="text" class="widefat" value="'.$settings['text'].'" /></label></p>';
	echo '<p>
			<label for="testimonial_by">Citation:
			<input id="testimonial_by" name="testimonial_by" type="text" class="widefat" value="'.$settings['by'].'" /></label></p>';
	echo '<input type="hidden" id="update_testimonial" name="update_testimonial" value="1" />';

}

register_sidebar_widget('Woo - Testimonial', 'testimonialwidget');
register_widget_control('Woo - Testimonial', 'testimonialwidgetAdmin', 400, 200);



// Show readmore widget 
function readmoreWidget() {

	$settings = get_option("widget_readmorewidget");

	$title = $settings['title'];
	$text = $settings['text'];
	$btnlink = $settings['btnlink'];

?>
	<div class="widget">

        <h3><?php echo $title; ?></h3>
        <p><?php echo $text; ?></p>
        <div class="btn-rounded"><a href="<?php echo $btnlink; ?>"><span>Read More</span></a></div>
        
	</div>
<?php
}

function readmorewidgetAdmin() {

	$settings = get_option("widget_readmorewidget");

	// check if anything's been sent
	if (isset($_POST['update_readmore'])) {
		$settings['title'] = strip_tags(stripslashes($_POST['readmore_title']));
		$settings['text'] = strip_tags(stripslashes($_POST['readmore_text']));
		$settings['btnlink'] = strip_tags(stripslashes($_POST['readmore_btnlink']));

		update_option("widget_readmorewidget",$settings);
	}

	echo '<p>
			<label for="readmore_title">Title:
			<input id="readmore_title" name="readmore_title" type="text" class="widefat" value="'.$settings['title'].'" /></label></p>';
	echo '<p>
			<label for="readmore_text">Text:
			<input id="readmore_text" name="readmore_text" type="text" class="widefat" value="'.$settings['text'].'" /></label></p>';
	echo '<p>
			<label for="readmore_btnlink">Button Link:
			<input id="readmore_btnlink" name="readmore_btnlink" type="text" class="widefat" value="'.$settings['btnlink'].'" /></label></p>';
	echo '<input type="hidden" id="update_readmore" name="update_readmore" value="1" />';

}

register_sidebar_widget('Woo - Read More', 'readmorewidget');
register_widget_control('Woo - Read More', 'readmorewidgetAdmin', 400, 200);
?>