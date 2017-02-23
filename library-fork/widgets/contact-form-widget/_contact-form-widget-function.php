<?php 
class Contact_Form_Widget extends WP_Widget
{
    //ref: https://www.directbasing.com/resources/wordpress/advanced-custom-fields-widget/#create-kick-ass-widgets-with-acf
    function Contact_Form_Widget() 
    {
        parent::__construct(false, "Contact Form Widget","description=Add a contact form to the footer");
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
        $dir=realpath(__DIR__ . '/_contact-form-widget.php'); // Absolute path and template file
        include($dir);        
    }
} 
register_widget("Contact_Form_Widget");
?>