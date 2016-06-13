<?php
	
	// Add RSS links to <head> section
	automatic_feed_links();
	
	// Load jQuery
	if ( !is_admin() ) {
	   wp_deregister_script('jquery');
	   wp_register_script('jquery', ("http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"), false);
	   wp_enqueue_script('jquery');
	}
	
	// Clean up the <head>
	function removeHeadLinks() {
    	remove_action('wp_head', 'rsd_link');
    	remove_action('wp_head', 'wlwmanifest_link');
    }
    add_action('init', 'removeHeadLinks');
    remove_action('wp_head', 'wp_generator');
    
	// Declare sidebar widget zone
    if (function_exists('register_sidebar')) {
    	register_sidebar(array(
    		'name' => 'Sidebar Widgets',
    		'id'   => 'sidebar-widgets',
    		'description'   => 'These are widgets for the sidebar.',
    		'before_widget' => '<div id="%1$s" class="widget %2$s">',
    		'after_widget'  => '</div>',
    		'before_title'  => '<h2>',
    		'after_title'   => '</h2>'
    	));
    }
	
	if (function_exists('register_nav_menus')) {
		register_nav_menus(array (
			'main_nav' => 'Main Nav Menu'
		));
	}
	function my_login_logo() { ?>
    <style type="text/css">
        #login h1 a, .login h1 a {
            background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/images/logo-red-no-font.png);
            padding-bottom: 30px;
        }
		body.login div#login form#loginform p.submit {
			background-color: #a32431 !important;
			
		}
		body.login div#login form#loginform p.submit input#wp-submit {
			background-color: #a32431;
			border-color: #a32431 !important;
			text-shadow: 0px -1px 1px #565656, 1px 0px 1px #565656, 0px 1px 1px #565656, -1px 0px 1px #565656 !important;
			box-shadow: 0px 1px 0px #565656 !important;
		}
		body.login div#login p.message {
			border-left-color: #a32431 !important;
		}
		body.login div#login form#registerform p.submit input#wp-submit{
			background-color: #a32431;
			border-color: #a32431 !important;
			text-shadow: 0px -1px 1px #565656, 1px 0px 1px #565656, 0px 1px 1px #565656, -1px 0px 1px #565656 !important;
			box-shadow: 0px 1px 0px #565656 !important;
		}
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'my_login_logo' );

function my_login_logo_url() {
    return home_url();
}
add_filter( 'login_headerurl', 'my_login_logo_url' );

function my_login_logo_url_title() {
    return 'Your Site Name and Info';
}
add_filter( 'login_headertitle', 'my_login_logo_url_title' );

add_action( 'init', 'blockusers_init' );
function blockusers_init() {
	if ( is_user_logged_in() && is_admin() && ! current_user_can( 'administrator' ) &&
	! ( defined( 'DOING_AJAX' ) && DOING_AJAX ) ) {
		wp_redirect( home_url() );
		exit;
		}
	}

add_theme_support( 'admin-bar', array( 'callback' => '__return_false') ); 




?>