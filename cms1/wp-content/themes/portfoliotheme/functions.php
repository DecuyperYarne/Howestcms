<?php
add_theme_support('post-thumbnails');

add_action('get_header', 'remove_admin_login_header');
function remove_admin_login_header()
{
    remove_action('wp_head', '_admin_bar_bump_cb');
}

function register_menu()
{
    register_nav_menus(array(
      'Header' => __('Header'),
      'Footer' => __('Footer')
    ));
}

add_action('init', 'register_menu');


// New post type
function create_projects_post_type()
{
    register_post_type('Project', array(
      'labels' => array(
        'name' => __('Project'),
      ),
      'public' => true,
      'publicly_queryable' => true,
      'has_archive' => true,
      'supports' => array(
        'title',
        'editor',
        'thumbnail',
        'comments'
      )
    ));
}

add_action('init', 'create_projects_post_type');

// Settings menu page
function custom_settings_page()
{ ?>
    <div class="wrap">
        <h1>Custom settings</h1>
        <form method="post" action="options.php">
            <?php
            settings_fields('section');
            do_settings_sections('theme-options');
            submit_button();
            ?>
        </form>
    </div>
<?php }

//Custom settings menu
function custom_settings_add_menu()
{
    add_menu_page('Custom settings', 'Custom settings', 'manage_options', 'custom-settings', 'custom_settings_page',
      null, 99);
}

add_action('admin_menu', 'custom_settings_add_menu');

// Twitter
function setting_twitter()
{ ?>
    <input type="text" name="twitter" id="twitter" value="<?php echo get_option('twitter'); ?>"/>
<?php }

// Github
function setting_github()
{ ?>
    <input type="text" name="github" id="github" value="<?php echo get_option('github'); ?>"/>
<?php }

// Linkedin
function setting_linkedin()
{ ?>
    <input type="text" name="linkedin" id="linkedin" value="<?php echo get_option('linkedin'); ?>"/>
<?php }

function custom_settings_page_setup()
{
    add_settings_section('section', 'All settings', null, 'theme-options');
    add_settings_field('twitter', 'Twitter URL', 'setting_twitter', 'theme-options', 'section');
    add_settings_field('github', 'GitHub URL', 'setting_github', 'theme-options', 'section');
    add_settings_field('linkedin', 'LinkedIn URL', 'setting_linkedin', 'theme-options', 'section');

    register_setting('section', 'twitter');
    register_setting('section', 'github');
    register_setting('section', 'linkedin');
}

add_action('admin_init', 'custom_settings_page_setup');

