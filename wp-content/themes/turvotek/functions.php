<?php
/**
 * Turvotek Green Energy Theme functions and definitions
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

function turvotek_setup() {
	// Add default RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	// Let WordPress manage the document title.
	add_theme_support( 'title-tag' );

	// Enable support for Post Thumbnails on posts and pages.
	add_theme_support( 'post-thumbnails' );

	// Register Primary Navigation Menu.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary Menu', 'turvotek' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
		'style',
		'script',
	) );

	// Declare WooCommerce Support
	add_theme_support( 'woocommerce' );
	add_theme_support( 'wc-product-gallery-zoom' );
	add_theme_support( 'wc-product-gallery-lightbox' );
	add_theme_support( 'wc-product-gallery-slider' );
}
add_action( 'after_setup_theme', 'turvotek_setup' );

/**
 * Enqueue scripts and styles.
 */
function turvotek_scripts() {
	// Enqueue main styling
	wp_enqueue_style( 'turvotek-style', get_stylesheet_uri() );
	
	// Enqueue custom design system styling
	wp_enqueue_style( 'turvotek-index-style', get_template_directory_uri() . '/css/index.css', array(), '1.0.0' );
}
add_action( 'wp_enqueue_scripts', 'turvotek_scripts' );

/**
 * Optimize WooCommerce wrapper hooks
 */
remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10 );
remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10 );

function turvotek_wrapper_start() {
    echo '<div class="container section">';
}
function turvotek_wrapper_end() {
    echo '</div>';
}
add_action( 'woocommerce_before_main_content', 'turvotek_wrapper_start', 10 );
add_action( 'woocommerce_after_main_content', 'turvotek_wrapper_end', 10 );

/**
 * Add Daily Pricing Configuration Fields for Solar Mounting Structures
 */
add_action( 'woocommerce_product_options_general_product_data', 'turvotek_add_custom_fields' );
function turvotek_add_custom_fields() {
    woocommerce_wp_text_input( array(
        'id'          => '_daily_metal_rate',
        'label'       => __( 'Daily Metal Rate (per Kg)', 'turvotek' ),
        'placeholder' => 'e.g. 88.00',
        'desc_tip'    => 'true',
        'description' => __( 'Enter the daily metal rate per kg for this mounting structure/purlin/rafter.', 'turvotek' ),
        'type'        => 'text',
    ) );
}

add_action( 'woocommerce_process_product_meta', 'turvotek_save_custom_fields' );
function turvotek_save_custom_fields( $post_id ) {
    $daily_metal_rate = isset( $_POST['_daily_metal_rate'] ) ? sanitize_text_field( $_POST['_daily_metal_rate'] ) : '';
    update_post_meta( $post_id, '_daily_metal_rate', $daily_metal_rate );
}

add_action( 'woocommerce_single_product_summary', 'turvotek_display_daily_metal_rate', 15 );
function turvotek_display_daily_metal_rate() {
    global $product;
    $rate = get_post_meta( $product->get_id(), '_daily_metal_rate', true );
    if ( ! empty( $rate ) ) {
        echo '<div class="daily-metal-rate" style="margin: 15px 0; padding: 10px; background: #eef2ff; border-left: 4px solid var(--primary); border-radius: 4px; font-size: 14px;">';
        echo '<strong>Daily Base Rate:</strong> ₹' . esc_html( $rate ) . ' per Kg';
        echo '</div>';
    }
}

/**
 * Custom Login Page Branding
 */
add_action( 'login_enqueue_scripts', 'turvotek_login_branding' );
function turvotek_login_branding() {
    ?>
    <style type="text/css">
        #login h1 a, .login h1 a {
            background-image: none !important;
            text-indent: 0 !important;
            width: auto !important;
            height: auto !important;
            font-size: 32px !important;
            font-weight: 800 !important;
            color: #024ad8 !important;
            letter-spacing: -0.5px !important;
            text-decoration: none !important;
            display: block !important;
            margin-bottom: 20px !important;
            text-align: center !important;
        }
        #login h1 a::after {
            content: 'TURVOTEK';
        }
        body.login {
            background-color: #f7f7f7 !important;
            font-family: 'Manrope', sans-serif !important;
        }
        .login #loginform {
            border-radius: 16px !important;
            border: 1px solid #e8e8e8 !important;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05) !important;
            padding: 30px 24px !important;
        }
        .login .button-primary {
            background: #024ad8 !important;
            border-color: #024ad8 !important;
            border-radius: 4px !important;
            text-shadow: none !important;
            box-shadow: none !important;
            font-weight: 700 !important;
        }
        .login .button-primary:hover, .login .button-primary:focus {
            background: #0236a8 !important;
            border-color: #0236a8 !important;
        }
    </style>
    <?php
}

add_filter( 'login_headerurl', 'turvotek_login_logo_url' );
function turvotek_login_logo_url() {
    return home_url();
}

add_filter( 'login_headertext', 'turvotek_login_logo_url_title' );
function turvotek_login_logo_url_title() {
    return 'Turvotek Green Energy';
}

/**
 * Clean up Dashboard menus for non-admin client roles (e.g. Editor / Shop Manager)
 */
add_action( 'admin_menu', 'turvotek_clean_admin_menu', 999 );
function turvotek_clean_admin_menu() {
    if ( ! current_user_can( 'manage_options' ) ) {
        remove_menu_page( 'options-general.php' );
        remove_menu_page( 'plugins.php' );
        remove_menu_page( 'tools.php' );
    }
}

/**
 * Filter to display "Rate on Request" for empty/zero prices in WooCommerce
 */
add_filter( 'woocommerce_get_price_html', 'turvotek_empty_price_html', 100, 2 );
function turvotek_empty_price_html( $price, $product ) {
    if ( $product->get_price() === '' || (float)$product->get_price() <= 0 ) {
        return '<span class="amount" style="color: var(--primary); font-weight: 700;">Rate on Request</span>';
    }
    return $price;
}

/**
 * Filter WooCommerce loop add to cart link to point to WhatsApp for empty/zero priced products
 */
add_filter( 'woocommerce_loop_add_to_cart_link', 'turvotek_custom_loop_add_to_cart_link', 100, 3 );
function turvotek_custom_loop_add_to_cart_link( $html, $product, $args = array() ) {
    if ( $product->get_price() === '' || (float)$product->get_price() <= 0 ) {
        $whatsapp_number = '919425011303';
        $product_name = esc_attr( $product->get_name() );
        $custom_message = rawurlencode( "Hello, I am interested in the product: {$product_name}. Could you please share the pricing and details?" );
        $whatsapp_url = "https://wa.me/{$whatsapp_number}?text={$custom_message}";
        
        $html = sprintf(
            '<a href="%s" class="button product_type_simple add_to_cart_button" target="_blank" rel="noopener noreferrer" style="background-color: #25D366 !important; color: #fff !important; border: none !important; display: inline-flex; align-items: center; gap: 8px; justify-content: center; font-weight: 600;"><svg style="width: 16px; height: 16px; fill: currentColor;" viewBox="0 0 24 24"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946C.06 5.348 5.397.01 12.008.01c3.202.001 6.212 1.246 8.477 3.514 2.266 2.268 3.507 5.28 3.505 8.484-.004 6.657-5.34 11.997-11.953 11.997-2.005-.001-3.973-.502-5.717-1.458L0 24zm6.59-4.846c1.6.95 3.188 1.449 4.825 1.451 5.436 0 9.86-4.42 9.864-9.864.002-2.637-1.03-5.114-2.905-6.989-1.874-1.873-4.354-2.903-6.994-2.903-5.441 0-9.865 4.422-9.87 9.865-.001 1.639.429 3.236 1.244 4.634L1.72 20.281l4.927-1.293zm11.578-4.782c-.3-.149-1.774-.875-2.046-.975-.272-.1-.469-.149-.667.15-.198.299-.767.974-.94 1.174-.173.199-.347.224-.648.075-.3-.15-1.266-.466-2.41-1.487-.89-.794-1.49-1.775-1.665-2.074-.173-.299-.018-.46.13-.609.135-.135.3-.349.45-.523.15-.174.2-.299.3-.499.1-.2.05-.375-.025-.524-.075-.15-.667-1.605-.913-2.197-.24-.578-.484-.5-.667-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.299-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.774-.726 2.022-1.429.247-.699.247-1.299.173-1.429-.074-.124-.272-.198-.57-.347z"/></svg> Rate on Request</a>',
            esc_url( $whatsapp_url )
        );
    }
    return $html;
}

/**
 * Add a custom WhatsApp button to the single product page summary for empty/zero priced products
 */
add_action( 'woocommerce_single_product_summary', 'turvotek_single_product_whatsapp_button', 30 );
function turvotek_single_product_whatsapp_button() {
    global $product;
    if ( $product->get_price() === '' || (float)$product->get_price() <= 0 ) {
        $whatsapp_number = '919425011303';
        $product_name = esc_attr( $product->get_name() );
        $custom_message = rawurlencode( "Hello, I am interested in the product: {$product_name}. Could you please share the pricing and details?" );
        $whatsapp_url = "https://wa.me/{$whatsapp_number}?text={$custom_message}";
        
        echo sprintf(
            '<div style="margin-top: 20px; margin-bottom: 20px;"><a href="%s" class="button alt" target="_blank" rel="noopener noreferrer" style="background-color: #25D366 !important; color: #fff !important; border: none !important; display: inline-flex; align-items: center; gap: 8px; font-weight: 700; padding: 12px 24px; text-decoration: none; border-radius: var(--rounded-md);"><svg style="width: 18px; height: 18px; fill: currentColor;" viewBox="0 0 24 24"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946C.06 5.348 5.397.01 12.008.01c3.202.001 6.212 1.246 8.477 3.514 2.266 2.268 3.507 5.28 3.505 8.484-.004 6.657-5.34 11.997-11.953 11.997-2.005-.001-3.973-.502-5.717-1.458L0 24zm6.59-4.846c1.6.95 3.188 1.449 4.825 1.451 5.436 0 9.86-4.42 9.864-9.864.002-2.637-1.03-5.114-2.905-6.989-1.874-1.873-4.354-2.903-6.994-2.903-5.441 0-9.865 4.422-9.87 9.865-.001 1.639.429 3.236 1.244 4.634L1.72 20.281l4.927-1.293zm11.578-4.782c-.3-.149-1.774-.875-2.046-.975-.272-.1-.469-.149-.667.15-.198.299-.767.974-.94 1.174-.173.199-.347.224-.648.075-.3-.15-1.266-.466-2.41-1.487-.89-.794-1.49-1.775-1.665-2.074-.173-.299-.018-.46.13-.609.135-.135.3-.349.45-.523.15-.174.2-.299.3-.499.1-.2.05-.375-.025-.524-.075-.15-.667-1.605-.913-2.197-.24-.578-.484-.5-.667-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.299-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.774-.726 2.022-1.429.247-.699.247-1.299.173-1.429-.074-.124-.272-.198-.57-.347z"/></svg> Request Rate via WhatsApp</a></div>',
            esc_url( $whatsapp_url )
        );
    }
}

/**
 * Update WooCommerce Cart Count dynamically via AJAX
 */
add_filter( 'woocommerce_add_to_cart_fragments', 'turvotek_cart_count_fragments' );
function turvotek_cart_count_fragments( $fragments ) {
    ob_start();
    ?>
    <a href="<?php echo esc_url( wc_get_cart_url() ); ?>" class="btn btn-outline cart-btn" style="height: 38px; padding: 0 16px;">
        🛒 Cart (<?php echo esc_html( WC()->cart->get_cart_contents_count() ); ?>)
    </a>
    <?php
    $fragments['a.cart-btn'] = ob_get_clean();
    return $fragments;
}

/**
 * AJAX handler for dynamic category product fetching
 */
add_action( 'wp_ajax_turvotek_get_category_products', 'turvotek_ajax_get_category_products' );
add_action( 'wp_ajax_nopriv_turvotek_get_category_products', 'turvotek_ajax_get_category_products' );
function turvotek_ajax_get_category_products() {
    $category_slug = isset( $_GET['category_slug'] ) ? sanitize_text_field( $_GET['category_slug'] ) : '';
    if ( empty( $category_slug ) ) {
        wp_send_json_error( 'Category slug is required.' );
    }

    $args = array(
        'post_type'      => 'product',
        'posts_per_page' => 12,
        'post_status'    => 'publish',
        'tax_query'      => array(
            array(
                'taxonomy' => 'product_cat',
                'field'    => 'slug',
                'terms'    => $category_slug,
            ),
        ),
        'meta_query'     => array(
            array(
                'key'     => '_thumbnail_id',
                'value'   => '0',
                'compare' => '>',
                'type'    => 'NUMERIC',
            ),
        ),
    );

    $loop = new WP_Query( $args );

    ob_start();
    if ( $loop->have_posts() ) {
        echo '<ul class="products columns-4">';
        while ( $loop->have_posts() ) {
            $loop->the_post();
            wc_get_template_part( 'content', 'product' );
        }
        echo '</ul>';
    } else {
        echo '<p class="no-products-found" style="text-align: center; color: var(--graphite); padding: 60px 0; font-size: 16px; width: 100%;">No products found in this category.</p>';
    }
    wp_reset_postdata();

    $html = ob_get_clean();
    wp_send_json_success( array( 'html' => $html ) );
}

/**
 * Register Contact Form Submission Custom Post Type
 */
add_action( 'init', 'turvotek_register_contact_cpt' );
function turvotek_register_contact_cpt() {
    $labels = array(
        'name'               => _x( 'Form Submissions', 'post type general name', 'turvotek' ),
        'singular_name'      => _x( 'Submission', 'post type singular name', 'turvotek' ),
        'menu_name'          => _x( 'Submissions', 'admin menu', 'turvotek' ),
        'name_admin_bar'     => _x( 'Submission', 'add new on admin bar', 'turvotek' ),
        'add_new'            => _x( 'Add New', 'submission', 'turvotek' ),
        'add_new_item'       => __( 'Add New Submission', 'turvotek' ),
        'new_item'           => __( 'New Submission', 'turvotek' ),
        'edit_item'          => __( 'View Submission', 'turvotek' ),
        'view_item'          => __( 'View Submission', 'turvotek' ),
        'all_items'          => __( 'All Submissions', 'turvotek' ),
        'search_items'       => __( 'Search Submissions', 'turvotek' ),
        'not_found'          => __( 'No submissions found.', 'turvotek' ),
        'not_found_in_trash' => __( 'No submissions found in Trash.', 'turvotek' )
    );

    $args = array(
        'labels'             => $labels,
        'public'             => false,
        'publicly_queryable' => false,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => false,
        'capability_type'    => 'post',
        'has_archive'        => false,
        'hierarchical'       => false,
        'menu_position'      => 58,
        'menu_icon'          => 'dashicons-email-alt2',
        'supports'           => array( 'title', 'editor' )
    );

    register_post_type( 'contact_submission', $args );
}

/**
 * Customize Columns for Contact Submission CPT list view in admin
 */
add_filter( 'manage_contact_submission_posts_columns', 'turvotek_contact_columns' );
function turvotek_contact_columns( $columns ) {
    $new_columns = array(
        'cb'            => $columns['cb'],
        'title'         => __( 'Name', 'turvotek' ),
        'contact_email' => __( 'Email', 'turvotek' ),
        'contact_phone' => __( 'Phone', 'turvotek' ),
        'contact_msg'   => __( 'Message Preview', 'turvotek' ),
        'date'          => $columns['date'],
    );
    return $new_columns;
}

add_action( 'manage_contact_submission_posts_custom_column', 'turvotek_contact_columns_content', 10, 2 );
function turvotek_contact_columns_content( $column, $post_id ) {
    switch ( $column ) {
        case 'contact_email':
            $email = get_post_meta( $post_id, '_contact_email', true );
            echo ! empty( $email ) ? esc_html( $email ) : '—';
            break;
        case 'contact_phone':
            $phone = get_post_meta( $post_id, '_contact_phone', true );
            echo ! empty( $phone ) ? esc_html( $phone ) : '—';
            break;
        case 'contact_msg':
            $post = get_post( $post_id );
            echo esc_html( wp_trim_words( $post->post_content, 12, '...' ) );
            break;
    }
}

/**
 * AJAX handler for Contact Form submission
 */
add_action( 'wp_ajax_turvotek_submit_contact_form', 'turvotek_ajax_submit_contact_form' );
add_action( 'wp_ajax_nopriv_turvotek_submit_contact_form', 'turvotek_ajax_submit_contact_form' );
function turvotek_ajax_submit_contact_form() {
    // 1. Verify Nonce
    if ( ! isset( $_POST['contact_nonce'] ) || ! wp_verify_nonce( $_POST['contact_nonce'], 'turvotek_contact_action' ) ) {
        wp_send_json_error( array( 'message' => 'Security check failed. Please refresh the page.' ) );
    }

    // 2. Validate Inputs
    $name    = isset( $_POST['contact_name'] ) ? sanitize_text_field( $_POST['contact_name'] ) : '';
    $phone   = isset( $_POST['contact_phone'] ) ? sanitize_text_field( $_POST['contact_phone'] ) : '';
    $email   = isset( $_POST['contact_email'] ) ? sanitize_email( $_POST['contact_email'] ) : '';
    $message = isset( $_POST['contact_message'] ) ? sanitize_textarea_field( $_POST['contact_message'] ) : '';

    if ( empty( $name ) || empty( $phone ) || empty( $email ) || empty( $message ) ) {
        wp_send_json_error( array( 'message' => 'Please fill in all required fields.' ) );
    }

    if ( ! is_email( $email ) ) {
        wp_send_json_error( array( 'message' => 'Please provide a valid email address.' ) );
    }

    // 3. Save Submission to Database as Custom Post Type
    $post_data = array(
        'post_title'   => $name,
        'post_content' => $message,
        'post_status'  => 'publish',
        'post_type'    => 'contact_submission',
    );

    $post_id = wp_insert_post( $post_data );

    if ( is_wp_error( $post_id ) ) {
        wp_send_json_error( array( 'message' => 'Failed to save submission. Please try again.' ) );
    }

    // Save Meta fields
    update_post_meta( $post_id, '_contact_email', $email );
    update_post_meta( $post_id, '_contact_phone', $phone );

    // 4. Send Email Notification
    $to = array( 'info@turvotek.com', 'turvotekgreen@gmail.com' );
    $subject = 'New Contact Form Submission: ' . $name;
    
    $headers = array(
        'Content-Type: text/html; charset=UTF-8',
        'From: Turvotek Website <no-reply@turvotek.com>'
    );

    // Build modern HTML email template
    $email_body = '
    <html>
    <head>
        <style>
            body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; }
            .container { max-width: 600px; margin: 0 auto; padding: 20px; border: 1px solid #eee; border-radius: 8px; }
            .header { background: #024ad8; color: #fff; padding: 15px; text-align: center; border-radius: 8px 8px 0 0; }
            .content { padding: 20px; }
            .field { margin-bottom: 15px; }
            .field strong { display: block; color: #555; }
            .footer { font-size: 12px; color: #888; text-align: center; margin-top: 20px; border-top: 1px solid #eee; padding-top: 10px; }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="header">
                <h2>New Contact Inquiry</h2>
            </div>
            <div class="content">
                <div class="field">
                    <strong>Submitter Name:</strong>
                    <span>' . esc_html( $name ) . '</span>
                </div>
                <div class="field">
                    <strong>Phone Number:</strong>
                    <span>' . esc_html( $phone ) . '</span>
                </div>
                <div class="field">
                    <strong>Email Address:</strong>
                    <span>' . esc_html( $email ) . '</span>
                </div>
                <div class="field">
                    <strong>Message:</strong>
                    <p style="white-space: pre-wrap; background: #f9f9f9; padding: 10px; border-radius: 4px; border-left: 3px solid #024ad8;">' . esc_html( $message ) . '</p>
                </div>
            </div>
            <div class="footer">
                This inquiry was submitted from the contact form on Turvotek Green Energy website.
            </div>
        </div>
    </body>
    </html>
    ';
    wp_mail( $to, $subject, $email_body, $headers );

    wp_send_json_success( array( 'message' => 'Thank you! Your message has been sent successfully. We will get back to you shortly.' ) );
}

/**
 * Remove WordPress branding from Admin Bar (Dashboard Header)
 */
add_action( 'admin_bar_menu', 'turvotek_remove_wp_logo_from_admin_bar', 999 );
function turvotek_remove_wp_logo_from_admin_bar( $wp_admin_bar ) {
    $wp_admin_bar->remove_node( 'wp-logo' );
}

/**
 * Remove WordPress branding from Admin Footer
 */
add_filter( 'admin_footer_text', 'turvotek_custom_admin_footer' );
function turvotek_custom_admin_footer() {
    echo '<span>Thank you for creating with <a href="' . esc_url( home_url() ) . '" target="_blank" style="color: #024ad8; font-weight: 600;">Turvotek Green Energy</a>.</span>';
}

add_filter( 'update_footer', '__return_empty_string', 11 );

/**
 * Custom Login Logo & URL
 */
add_action( 'login_enqueue_scripts', 'turvotek_custom_login_logo' );
function turvotek_custom_login_logo() {
    $logo_url = get_template_directory_uri() . '/assetspictures/logo.png';
    ?>
    <style type="text/css">
        #login h1 a, .login h1 a {
            background-image: url(<?php echo esc_url( $logo_url ); ?>) !important;
            height: 60px !important;
            width: 100% !important;
            background-size: contain !important;
            background-repeat: no-repeat !important;
            background-position: center !important;
            padding-bottom: 20px !important;
        }
        .login {
            background-color: #f3f4f6 !important;
        }
        .login #loginform {
            border-radius: 8px !important;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06) !important;
            border: 1px solid #e5e7eb !important;
        }
        .login .button-primary {
            background: #024ad8 !important;
            border-color: #024ad8 !important;
            text-shadow: none !important;
            box-shadow: none !important;
        }
        .login .button-primary:hover {
            background: #013bb0 !important;
            border-color: #013bb0 !important;
        }
    </style>
    <?php
}

add_filter( 'login_headerurl', 'turvotek_custom_login_logo_url' );
function turvotek_custom_login_logo_url() {
    return home_url();
}

add_filter( 'login_headertext', 'turvotek_custom_login_logo_url_title' );
function turvotek_custom_login_logo_url_title() {
    return 'Turvotek Green Energy';
}

/**
 * Rename WooCommerce Menu Tab to Shop Management
 */
add_action( 'admin_menu', 'turvotek_rename_woocommerce_menu', 999 );
function turvotek_rename_woocommerce_menu() {
    global $menu;
    foreach ( $menu as $key => $item ) {
        if ( 'woocommerce' === $item[2] ) {
            $menu[ $key ][0] = __( 'Shop Management', 'turvotek' );
            break;
        }
    }
}

/**
 * Replace "Welcome to WordPress!" with "Welcome!" on the dashboard welcome panel
 */
add_filter( 'gettext', 'turvotek_change_welcome_text', 20, 3 );
function turvotek_change_welcome_text( $translated_text, $text, $domain ) {
    if ( is_admin() && 'Welcome to WordPress!' === $text ) {
        $translated_text = 'Welcome!';
    }
    return $translated_text;
}

/**
 * Custom Admin Panel styling to hide version description under the Welcome heading
 */
add_action( 'admin_head', 'turvotek_custom_admin_dashboard_styles' );
function turvotek_custom_admin_dashboard_styles() {
    ?>
    <style type="text/css">
        .welcome-panel .welcome-panel-header p.about-description,
        .welcome-panel .about-description {
            display: none !important;
        }
    </style>
    <?php
}


/**
 * ============================================================
 * Live Product Search — AJAX Handler
 * ============================================================
 */
add_action( 'wp_ajax_turvotek_live_search',        'turvotek_live_search_handler' );
add_action( 'wp_ajax_nopriv_turvotek_live_search', 'turvotek_live_search_handler' );

function turvotek_live_search_handler() {
    // Security check
    if ( ! isset( $_GET['nonce'] ) || ! wp_verify_nonce( sanitize_text_field( wp_unslash( $_GET['nonce'] ) ), 'turvotek_live_search_nonce' ) ) {
        wp_send_json_error( array( 'message' => 'Invalid nonce' ), 403 );
    }

    $term = isset( $_GET['q'] ) ? sanitize_text_field( wp_unslash( $_GET['q'] ) ) : '';

    if ( strlen( $term ) < 2 ) {
        wp_send_json_success( array() );
    }

    $query = new WP_Query( array(
        'post_type'      => 'product',
        'post_status'    => 'publish',
        's'              => $term,
        'posts_per_page' => 8,
        'no_found_rows'  => true,
        'meta_query'     => array(
            array(
                'key'     => '_thumbnail_id',
                'value'   => '0',
                'compare' => '>',
                'type'    => 'NUMERIC',
            ),
        ),
    ) );

    $results = array();
    if ( $query->have_posts() ) {
        while ( $query->have_posts() ) {
            $query->the_post();
            $product = wc_get_product( get_the_ID() );
            if ( ! $product ) continue;

            $thumb_id  = $product->get_image_id();
            $thumb_url = $thumb_id
                ? wp_get_attachment_image_url( $thumb_id, 'thumbnail' )
                : wc_placeholder_img_src( 'thumbnail' );

            $results[] = array(
                'id'    => get_the_ID(),
                'title' => get_the_title(),
                'url'   => get_permalink(),
                'thumb' => $thumb_url,
                'price' => $product->get_price_html(),
            );
        }
        wp_reset_postdata();
    }

    wp_send_json_success( $results );
}

/**
 * Exclude products without featured images globally from all frontend loops and queries
 */
function turvotek_hide_products_without_images_globally( $q ) {
    if ( is_admin() ) {
        return;
    }

    // Target product queries
    $post_type = $q->get( 'post_type' );
    $is_product_query = false;

    if ( 'product' === $post_type ) {
        $is_product_query = true;
    } elseif ( is_array( $post_type ) && in_array( 'product', $post_type ) ) {
        $is_product_query = true;
    }

    // Do not hide them on single product pages, cart pages, or checkout
    if ( $is_product_query && ! $q->is_singular() ) {
        $meta_query = (array) $q->get( 'meta_query' );

        // Ensure we don't duplicate the filter
        $has_thumbnail_filter = false;
        foreach ( $meta_query as $sub_query ) {
            if ( isset( $sub_query['key'] ) && '_thumbnail_id' === $sub_query['key'] ) {
                $has_thumbnail_filter = true;
                break;
            }
        }

        if ( ! $has_thumbnail_filter ) {
            $meta_query[] = array(
                'key'     => '_thumbnail_id',
                'value'   => '0',
                'compare' => '>',
                'type'    => 'NUMERIC',
            );
            $q->set( 'meta_query', $meta_query );
        }
    }
}
add_action( 'pre_get_posts', 'turvotek_hide_products_without_images_globally', 99 );

