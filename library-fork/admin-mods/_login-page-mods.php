<?php
# ref: https://www.elegantthemes.com/blog/tips-tricks/how-to-customize-the-wordpress-login-page

// Changing the Login Logo
// function my_loginlogo() {
//   echo '<style type="text/css">
//     h1 a {
//       background-image: url(' . get_template_directory_uri() . '/library/theme/login/logo.png) !important;
//     }
//   </style>';
// }
// add_action('login_head', 'my_loginlogo');

// Change the Logo Image URL
function my_loginURL() {
    return 'http://www.brightlight.ie/';
}
add_filter('login_headerurl', 'my_loginURL');

// Change the title tag of this link
function my_loginURLtext() {
    return 'BrightLight Web Development';
}
add_filter('login_headertitle', 'my_loginURLtext');


function my_logincustomCSSfile() {
    wp_enqueue_style('login-styles', get_template_directory_uri().LIBRARY_FORK.'admin-mods/login/login_styles.css');
}
add_action('login_enqueue_scripts', 'my_logincustomCSSfile');

// Adding a Custom Link Under Form
function my_loginfooter() { ?>
    <p style="text-align: center; margin-top: 1em;">
    <a style="color: #4da28f; text-decoration: none;" href="http://www.brightlight.ie/">If you have any questions, visit our site
        </a>
    </p>
<?php }
add_action('login_footer','my_loginfooter');



