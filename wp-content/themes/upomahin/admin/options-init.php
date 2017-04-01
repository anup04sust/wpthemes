<?php

/**
 * For full documentation, please visit: http://docs.reduxframework.com/
 * For a more extensive sample-config file, you may look at:
 * https://github.com/reduxframework/redux-framework/blob/master/sample/sample-config.php
 */
if (!class_exists('Redux')) {
    return;
}

// This is your option name where all the Redux data is stored.
$opt_name = "redux_upomahin";

/**
 * ---> SET ARGUMENTS
 * All the possible arguments for Redux.
 * For full documentation on arguments, please refer to: https://github.com/ReduxFramework/ReduxFramework/wiki/Arguments
 * */
$theme = wp_get_theme(); // For use with some settings. Not necessary.

$args = array(
    'opt_name' => 'redux_upomahin',
    'dev_mode' => TRUE,
    'display_name' => 'Theme Options',
    'display_version' => '1.0.0',
    'page_title' => 'Upomahin Theme Options',
    'intro_text' => 'Custom Theme Options',
    'footer_text' => 'Customize by Anup Biswas',
    'admin_bar' => TRUE,
    'menu_type' => 'submenu',
    'menu_title' => 'Theme Options',
    'allow_sub_menu' => TRUE,
    'page_parent' => 'themes.php',
    'page_parent_post_type' => 'your_post_type',
    'customizer' => TRUE,
    'default_mark' => '*',
    'google_api_key' => 'AIzaSyBR8-MlNuwZk68Q3tMkHwK1lDWFouFj3RU',
    'class' => 'redux-upomahin',
    'hints' => array(
        'icon_position' => 'right',
        'icon_color' => 'lightgray',
        'icon_size' => 'normal',
        'tip_style' => array(
            'color' => 'light',
        ),
        'tip_position' => array(
            'my' => 'top left',
            'at' => 'bottom right',
        ),
        'tip_effect' => array(
            'show' => array(
                'duration' => '500',
                'event' => 'mouseover',
            ),
            'hide' => array(
                'duration' => '500',
                'event' => 'mouseleave unfocus',
            ),
        ),
    ),
    'output' => TRUE,
    'output_tag' => TRUE,
    'settings_api' => TRUE,
    'cdn_check_time' => '1440',
    'compiler' => TRUE,
    'page_permissions' => 'manage_options',
    'save_defaults' => TRUE,
    'show_import_export' => TRUE,
    'database' => 'options',
    'transient_time' => '3600',
    'network_sites' => TRUE,
);



Redux::setArgs($opt_name, $args);

/*
 * ---> END ARGUMENTS
 */

/*
 * ---> START HELP TABS
 */

$tabs = array(
    array(
        'id' => 'redux-help-tab-1',
        'title' => __('Theme Information 1', 'upomahin'),
        'content' => __('<p>This is the tab content, HTML is allowed.</p>', 'upomahin')
    ),
    array(
        'id' => 'redux-help-tab-2',
        'title' => __('Theme Information 2', 'upomahin'),
        'content' => __('<p>This is the tab content, HTML is allowed.</p>', 'upomahin')
    )
);
Redux::setHelpTab($opt_name, $tabs);

// Set the help sidebar
$content = __('<p>This is the sidebar content, HTML is allowed.</p>', 'upomahin');
Redux::setHelpSidebar($opt_name, $content);


/*
 * <--- END HELP TABS
 */


/*
 *
 * ---> START SECTIONS
 *
 */
Redux::setSection($opt_name, array(
    'title' => __('Basic Settings', 'upomahin'),
    'id' => 'basic-opt-site',
    'icon' => 'el el-home',
    'customizer_width' => '450px',
    'fields' => array(
        array(
            'id' => 'opt-topbar',
            'type' => 'switch',
            'title' => __('Show Top Social Bar', 'upomahin'),
            'subtitle' => __('Look, it\'s on!', 'upomahin'),
            'default' => true,
        ),
    )
));
Redux::setSection($opt_name, array(
    'title' => __('Social Links', 'upomahin'),
    'id' => 'opt-social-links',
    'icon' => 'el el-podcast',
    'fields' => array(
        array(
            'id' => 'opt-facbook',
            'type' => 'text',
            'title' => __('Facebook', 'upomahin'),
            'desc' => __('https://www.facebook.com', 'upomahin'),
        ),
        array(
            'id' => 'opt-tumblr',
            'type' => 'text',
            'title' => __('Tumblr', 'upomahin'),
            'desc' => __('https://www.tumblr.com/', 'upomahin'),
        ),
        array(
            'id' => 'opt-instagram',
            'type' => 'text',
            'title' => __('Instagram', 'upomahin'),
            'desc' => __('https://www.instagram.com/', 'upomahin'),
        ),
        array(
            'id' => 'opt-twitter',
            'type' => 'text',
            'title' => __('Twitter', 'upomahin'),
            'desc' => __('https://twitter.com/', 'upomahin'),
        ),
        array(
            'id' => 'opt-google-plus',
            'type' => 'text',
            'title' => __('Google+', 'upomahin'),
            'desc' => __('https://plus.google.com/', 'upomahin'),
        ),
        array(
            'id' => 'opt-pinterest',
            'type' => 'text',
            'title' => __('Pinterest', 'upomahin'),
            'desc' => __('https://www.pinterest.com/', 'upomahin'),
        ),
        array(
            'id' => 'opt-linkedin',
            'type' => 'text',
            'title' => __('Linkedin', 'upomahin'),
            'desc' => __('https://www.linkedin.com/', 'upomahin'),
        ),
        array(
            'id' => 'opt-reddit',
            'type' => 'text',
            'title' => __('Reddit', 'upomahin'),
            'desc' => __('https://www.reddit.com/', 'upomahin'),
        ),
        array(
            'id' => 'opt-tagged',
            'type' => 'text',
            'title' => __('Tagged', 'upomahin'),
            'desc' => __('http://www.tagged.com', 'upomahin'),
        ),
        array(
            'id' => 'opt-myspace',
            'type' => 'text',
            'title' => __('MySpace', 'upomahin'),
            'desc' => __('https://myspace.com/', 'upomahin'),
        ),
    )
));


/*
     * <--- END SECTIONS
     */
