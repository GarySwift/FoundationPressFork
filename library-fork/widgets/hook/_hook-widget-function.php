<?php 
class Hook_Widget extends WP_Widget
{
    //ref: https://www.directbasing.com/resources/wordpress/advanced-custom-fields-widget/#create-kick-ass-widgets-with-acf
    function Hook_Widget() 
    {
        parent::WP_Widget(false, "Advanced Developer Widget","description=Gives you the option to specify a PHP script to add");
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
        $dir=realpath(__DIR__ . '/_hook-widget.php'); // Absolute path and template file
        include($dir);
    }
} 
register_widget("Hook_Widget");