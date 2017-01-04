<?php 
class Test_Widget extends WP_Widget
{
    //ref: https://www.directbasing.com/resources/wordpress/advanced-custom-fields-widget/#create-kick-ass-widgets-with-acf
    function Test_Widget() {
        parent::WP_Widget(false, "Test Widget","description=Simple header and text area");
    }
 
    function update($new_instance, $old_instance) {  
        return $new_instance;  
    }  
 
    function form($instance){  
        $title = esc_attr($instance["title"]);  
        echo "<br />";
    }
 
    function widget($args, $instance) {
        $widget_id = "widget_" . $args["widget_id"];
        $dir=realpath(__DIR__ . '/_test-widget.php'); // Absolute path and template file
        include($dir);
    }
} 
register_widget("Test_Widget");