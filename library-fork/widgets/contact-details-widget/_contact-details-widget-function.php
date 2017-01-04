<?php 
class Contact_Details_Widget extends WP_Widget
{
    //ref: https://www.directbasing.com/resources/wordpress/advanced-custom-fields-widget/#create-kick-ass-widgets-with-acf
    function Contact_Details_Widget() 
    {
        parent::WP_Widget(false, "Contact Details");
        parent::WP_Widget(false, "Contact Details","description=This will display custom settings such as address, email and social media.");
    }
 
    function update($new_instance, $old_instance) 
    {  
        return $new_instance;  
    }  
 
    function form($instance)
    {  
        $title = esc_attr($instance["title"]);  
        echo "<br />";
    }
 
    function widget($args, $instance) 
    {
        $widget_id = "widget_" . $args["widget_id"];
        $dir=realpath(__DIR__ . '/_contact-details-widget.php'); // Absolute path and template file
        include($dir);        
    }
} 
register_widget("Contact_Details_Widget");
?>