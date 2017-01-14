# Fork Notes
This ia a fork of olefredrik's __FoundationPress__. Please find original here: <https://github.com/olefredrik/FoundationPress>

This fork will mostly be used as a place to keep my most used modifications and templates.

There will be significant focus on implementing Advanced Custom Fields features. 

## Requirements

This project requires [Node.js](http://nodejs.org) v4.x.x  to be installed on your machine. Please be aware that you may encounter problems with the installation if you are using v5.1.0 with all the latest features.

FoundationPress uses [Sass](http://Sass-lang.com/) (CSS with superpowers). In short, Sass is a CSS pre-processor that allows you to write styles more effectively and tidy.

The Sass is compiled using libsass, which requires the GCC to be installed on your machine. Windows users can install it through [MinGW](http://www.mingw.org/), and Mac users can install it through the [Xcode Command-line Tools](http://osxdaily.com/2014/02/12/install-command-line-tools-mac-os-x/).

## Quickstart

### 1. Clone the repository and install with npm
**Note:** You can change `ThemeFolder` to something more meaningful such as the project name or leave out completely to use the default name `FoundationPress`.

```bash
$ cd my-wordpress-folder/wp-content/themes/
$ git clone https://github.com/GarySwift/FoundationPress.git ThemeFolder && cd $_
$ npm install
```
#### Optional Reminders
The following tips are completly optional but I leave them here as reminder to myself for new installation of WordPress.

#####I. Change the WordPress Administrator User ID

By changing the WordPress administrator user ID you are protecting your WordPress from targeted attacks.

Connect to your WordPress database using the MySQL command line tool or the web based phpMyAdmin and execute the below queries on the WordPress database:

```sql
UPDATE wp_users SET ID = 1024 WHERE ID = 1;
UPDATE wp_usermeta SET user_id = 1024 WHERE user_id = 1;
ALTER TABLE wp_users AUTO_INCREMENT = 2048;
```

Ref: <https://premium.wpmudev.org/blog/change-default-wordpress-uploads-folder/>

**Tip:** Always specify a high value for the new WordPress administrator ID. The higher the value is the less chances of it being discovered and the longer an attack will take.

#####II. Change the Default WordPress Uploads Folder

Open your wp-config.php file, locoed at the root of your WordPress installation, and add the following snippet:

```php
define('UPLOADS', 'assets');
```

Make sure you add this code before the line:

```php
require_once(ABSPATH.’wp-settings.php’);
```

ref: <https://premium.wpmudev.org/blog/change-default-wordpress-uploads-folder/>

### 2. While you're working on your project, run:

```bash
$ npm run watch
```

If you want to take advantage of browser-sync (automatic browser refresh when a file is saved), simply open your Gulpfile.js and put your local dev-server address (e.g localhost) in this field ```var URL = '';``` , save the Gulpfile and run
```bash
$ npm run watch
```

### 3. For building all the assets, run:

```bash
$ npm run build
```

Build all assets minified and without sourcemaps:
```bash
$ npm run production
```
### 4. For packaging everything with node requiremnts, run:

```bash
$ npm run build
```

Build all assets minified and without sourcemaps:
```bash
$ npm run package
```

Get packaged zip in `ThemeFolder/packages`

## Fork Differences

#### SASS
All extra sass is found in the `ThemeFolder/assets/scss/theme/` folder. All includes are added to the file in here `theme.scss`. In turn, this is added to `ThemeFolder/assets/scss/foundation.scss`. This is only change made __olefredrik's__ scss.

```scss
// Custom
@import "theme/theme";
```

#### JavaScript
As recommended in the the parent repository, all custom scripts are kept in `assets/javascript/custom/`. All frontend scripts added by this fork begin with an underscore.

The most important script here is `_form-builder.js`. This controls the client side for `Form Builder` WordPress template.

There are additional scripts that can be loaded by the __WordPress__ backend. These are located in `assets/javascript/theme/`.

Included Libraries:

__Magnific-Popup:__ <https://github.com/dimsemenov/Magnific-Popup>

>Magnific Popup is a responsive lightbox & dialog script with focus on performance and providing best experience for user with any device
(for jQuery or Zepto.js).

```
_magnific-popup.js
_magnific-popup-event-listener.js
```

__Google Maps API:__ Allows users add Google maps using ACF. The event listner for google maps is located in `template-parts/_google-maps.js.php` and looded inline by `footer.php`.

```
_google-maps.js
```

__Sticky:__ <http://stickyjs.com/>

>Sticky is a jQuery plugin that gives you the ability to
make any element on your page always stay visible.

Used to keep the topbar sticky, even if there is content above it.

```
_sticky.js
_sticky-event-listener.js
```
#### WordPress Function Library
This is the big one. Directory structure shown below. More to follow

```
├── __acf-load-post-types-into-select.php
├── _add-custom-admin-js.php
├── _add-tips-metabox.php
├── _add-wp-admin-theme-customizations-js.php
├── _admin-notices.php
├── _change-menu-order-for-pages.php
├── _custom-dashboard-widget.php
├── _featured-image.php
├── _google-maps-api.php
├── _login-page-mods.php
├── _navigation.php
├── _remove-add-media-buttons.php
├── _remove-admin-dashboard-widgets.php
├── _remove-comments-menu-item.php
├── _remove-comments-support.php
├── _remove-footer-admin.php
├── _remove-tools-menu-item.php
├── _rename-posts-in-menu.php
├── _select2.php
├── _set-wordpress-admin-area-color-scheme.php
├── _slug-text.php
├── _tiny-mce.php
├── _wordpress-greeting.php
├── _wp-post-format-theme-support.php
├── acf
│   ├── _acf-cpt-team-profile.json
│   ├── _acf-cpt-team-profile.php
│   ├── _acf-function-form-builder.json
│   ├── _acf-function-form-builder.php
│   ├── _acf-function-test-pages-notes.php
│   ├── _contact-page-additional-fields.json
│   ├── _contact-page-additional-fields.php
│   ├── _flexible-content-v1.0.json
│   ├── _flexible-content-v1.0.php
│   ├── _flexible-content-v1.1.json
│   ├── _flexible-content-v1.1.php
│   ├── _flexible-content.json
│   ├── _flexible-content.php
│   ├── _include-sidebar-options-in-functions-file.php
│   ├── _page-layout-settings.json
│   ├── _page-layout-settings.php
│   ├── _page-sidebar-settings.json
│   ├── _page-sidebar-settings.php
│   ├── _post-additional-fields.json
│   ├── _post-additional-fields.php
│   ├── _post-format-gallery.json
│   ├── _post-format-gallery.php
│   ├── _post-format-video.json
│   ├── _post-format-video.php
│   ├── _sidebar-option-company-details.json
│   ├── _sidebar-option-company-details.php
│   ├── _sidebar-option-contact-details.json
│   ├── _sidebar-option-contact-details.php
│   ├── _sidebar-option-contact-numbers.json
│   ├── _sidebar-option-contact-numbers.php
│   ├── _sidebar-option-location.php
│   ├── _sidebar-option-logos-images.json
│   ├── _sidebar-option-logos-images.php
│   ├── _sidebar-option-social-media.json
│   ├── _sidebar-option-social-media.php
│   ├── _sidebar-options-opening-hours.php
│   ├── _test-pages-notes.json
│   ├── _test-pages-notes.php
│   ├── _testimonial-additonal-fields.json
│   ├── _testimonial-additonal-fields.php
│   ├── _testimonials-repeater.json
│   ├── _testimonials-repeater.php
│   ├── _widget-sidebar-menu-settings.json
│   ├── _widget-sidebar-menu-settings.php
│   ├── _widget-tester.json
│   ├── _widget-tester.php
│   ├── _widget-text-image-box.json
│   ├── _widget-text-image-box.php
│   └── hero_image_acf-export-2016-03-29.json
├── admin-bar-wordpress-logo
│   ├── _rebranding-wordpress-logo.php
│   ├── _remove-wp-logo-from-admin-bar.php
│   ├── brightlight_text-xs.png
│   └── logo.png
├── custom-post-types
│   ├── __custom-post-type-title-placeholder.php
│   ├── _team.json
│   ├── _team.php
│   ├── _testimonial.json
│   └── _testimonial.php
├── login
│   ├── brightlight-logo.png
│   ├── login_styles.css
│   └── logo.png
├── posts-screen-columns
│   ├── _page.php
│   ├── _team.php
│   └── _testimonial.php
├── widgets
│   ├── sidebar-menu-widget
│   │   ├── _sidebar-menu-widget-function.php
│   │   └── _sidebar-menu-widget.php
│   ├── test-widget
│   │   ├── _test-widget-function.php
│   │   └── _test-widget.php
│   ├── text-and-image-box-widget
│   │   ├── _image.php
│   │   ├── _text-and-image-box-widget-function.php
│   │   └── _text-and-image-box-widget.php
│   └── text-widget
│       ├── _text-widget-function.php
│       └── _text-widget.php
└── wp-admin-color-themes
    ├── _restrict-users-from-changeing-admin-theme.php
    ├── _set-wordpress-admin-area-color-scheme-based-on-role.php
    ├── _set-wordpress-admin-area-color-scheme.php
    ├── _wp-admin-color-themes.php
    └── colors
        ├── _admin.scss
        ├── _mixins.scss
        ├── _variables.scss
        ├── aubergine
        │   ├── colors-rtl.css
        │   ├── colors.css
        │   └── colors.scss
        ├── brightlight
        │   ├── colors-rtl.css
        │   ├── colors.css
        │   ├── colors.css.map
        │   └── colors.scss
        ├── flat
        │   ├── colors-rtl.css
        │   ├── colors.css
        │   └── colors.scss
        └── primary
            ├── colors-rtl.css
            ├── colors.css
            └── colors.scss

```

### Debugging
This is a general WordPress note and is not related to the theme.
The following code should be placed in `wp-config.php` in the root directory.
```
$debug=true;// Turn on/off Wordpress debugging (and log it in debug.log)
if($debug) {
    // Turn debugging on
    define('WP_DEBUG', true);

    // Tell WordPress to log everything to /wp-content/debug.log
    define('WP_DEBUG_LOG', true);

    // Turn off the display of error messages on your site
    define('WP_DEBUG_DISPLAY', false);

    // For good measure, you can also add the follow code, which will hide errors from being displayed on-screen
    @ini_set('display_errors', 0);
}
else {
    define('WP_DEBUG', false);
}
```
