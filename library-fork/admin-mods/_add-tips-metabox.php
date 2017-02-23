<?php 
define( 'IMAGEPATH', get_template_directory_uri ().LIBRARY_FORK.'assets/images/' );

// Add help text to right of screen in a metabox
function metabox_top_right() {
	//Publishing and Saving Changes
    add_meta_box( 'after-title-help', 'BrightLight Tips', 'top_right_help_metabox_content', 'post', 'side', 'high' );
}
// callback function to populate metabox
function top_right_help_metabox_content() { 
	$tips = array();
	$tips[]=array("header"=>"Publishing", "content"=>"Make sure you click 'Publish' below to publish a new article once you've added it, or 'Update' to save any changes.");
	$tips[]=array("header"=>"Post Formats", "content"=>"Use the post <b>Format</b> box below to select the type of content you wish to show.");
	$tips[]=array("header"=>"Tired of Seeing These Tips?", "content"=>"Screen Options is a fly down menu button located on the top right corner of some pages in your WordPress admin area. When clicked, Screen Options menu shows options to configure the view of that particular page in your admin area.");
	$tips[]=array("header"=>"Featured Image", "content"=>"Use the featured image input at the bottom of this page to show an image on the front end. Don't forget to add the title, caption and alt to the image.");
	$tips[]=array("header"=>"Read More", "content"=>"If you want to control how much of a post displays on the homepage, use a jump break. It’s also called a more tab and it cuts off the text and inserts a READ MORE link for people to click.<br><br><img class=\"tips\" src=\"".IMAGEPATH."jumpbreak.png\" alt=\"jumpbreak\">");
	$tips[]=array("header"=>"Permalinks", "content"=>"You can edit the permalink of the Post URL if you changed the title or want to rename it. Click edit next to the link that appears under the post title.<br><br><img class=\"tips\" src=\"".IMAGEPATH."permalink.png\" alt=\"permalink\">");
	$tips[]=array("header"=>"Erase Formatting", "content"=>"Use the little eraser button to undo pre-formatted text that looks wonky on the post screen.<br><br><img class=\"tips\" src=\"".IMAGEPATH."formatting.png\" alt=\"formatting\">");
	$tips[]=array("header"=>"Quotes", "content"=>"Use the quote button to accent certain parts of your text.<br><br><img class=\"tips\" src=\"".IMAGEPATH."quote.png\" alt=\"quote\">");
	$tips[]=array("header"=>"Image Metadata", "content"=>"Change the name of your images to keyword friendly titles.<br><br>That way if people are searching in Google images, they are more likely to stumble upon your site.<br><br><img class=\"tips\" src=\"".IMAGEPATH."images.png\" alt=\"images\">");
	$tips[]=array("header"=>"News & Pages", "content"=>"Confused about the difference between a Page and a News Post?<br><br>A page is a static piece of content. It’s like a webpage.  A great use for pages is your ABOUT page. A <b>News</b> post is a dated piece of content. Think of a post like a daily newspaper article and a page as a brochure for your business or blog.");
	$tips[]=array("header"=>"Create a hyperlink in your post that references an older post", "content"=>"Rather than having to type out the URL or look for it in another window, use the link button and select link options.<br><br><img class=\"tips\" src=\"".IMAGEPATH."hyperlinks.png\" alt=\"hyperlinks\">");
	$tips[]=array("header"=>"Future Publishing", "content"=>"Pre schedule your posts if you think you will be away for a while. The same applies if you wish to back date a post. <br><br><img class=\"tips\" src=\"".IMAGEPATH."futurepublish.jpg\" alt=\"futurepublish\">");
	$tip = $tips[array_rand($tips, 1)];
	?>
	<h3><?php echo $tip["header"]; ?></h3>
    <p><?php echo $tip["content"]; ?></p>
<?php }
add_action( 'add_meta_boxes', 'metabox_top_right' );


# Show the 'tips' widget on the WordPress dashboard
// function tips_dashboard_widgets() {
// 	global $wp_meta_boxes;
// 	wp_add_dashboard_widget('brightLight_tips', 'BrightLight Tips', 'top_right_help_metabox_content');
// }
// add_action('wp_dashboard_setup', 'tips_dashboard_widgets');