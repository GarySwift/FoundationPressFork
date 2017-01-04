<?php 
class Text_And_Image_Box_Widget extends WP_Widget
{
    //ref: https://www.directbasing.com/resources/wordpress/advanced-custom-fields-widget/#create-kick-ass-widgets-with-acf
    function Text_And_Image_Box_Widget() 
    {
        parent::WP_Widget(false, "Text & Image Widget","description=Header and WYSIWYG Editor with Optional Image (Ref: Gary Swift)");
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
        $dir=realpath(__DIR__ . '/_text-and-image-box-widget.php'); // Absolute path and template file
        include($dir);
    }
} 
register_widget("Text_And_Image_Box_Widget");