<?php
// Hide WooCommerce default page title to avoid duplication
add_filter( 'woocommerce_show_page_title', '__return_false' );

// Remove default WooCommerce result count to avoid duplicate
remove_action( 'woocommerce_before_shop_loop', 'woocommerce_result_count', 20 );
remove_action( 'woocommerce_after_shop_loop', 'woocommerce_result_count', 20 );

// Custom premium pagination args
add_filter( 'woocommerce_pagination_args', function( $args ) {
    $args['prev_text'] = '‹';
    $args['next_text'] = '›';
    $args['type'] = 'list';
    return $args;
} );

// Toolbar wrapper - opens before ordering/result count
add_action( 'woocommerce_before_shop_loop', function() {
    echo '<div class="woocommerce-before-shop-loop-bar">';
}, 5 );

// Toolbar wrapper - closes after ordering/result count
add_action( 'woocommerce_before_shop_loop', function() {
    echo '</div>';
}, 35 );

// Premium result count
add_action( 'woocommerce_before_shop_loop', function() {
    if ( ! wc_get_loop_prop( 'is_paginated' ) ) return;
    $total   = wc_get_loop_prop( 'total' );
    $per_page = wc_get_loop_prop( 'per_page' );
    $current  = wc_get_loop_prop( 'current_page' );
    $from     = 1 + ( $current - 1 ) * $per_page;
    $to       = min( $current * $per_page, $total );
    if ( $total > 0 ) {
        echo '<div class="shop-result-count"><span class="result-count-text">Showing <strong>' . $from . '&ndash;' . $to . '</strong> of <strong>' . $total . '</strong> products</span></div>';
    }
}, 31 );

get_header(); 
?>

<div class="container section">
    <?php if ( is_shop() || is_product_category() || is_product_taxonomy() ) : ?>
        <?php
        $current_term_id = 0;
        if ( is_product_category() ) {
            $current_term = get_queried_object();
            $current_term_id = $current_term ? $current_term->term_id : 0;
        }
        
        $categories = get_terms( array(
            'taxonomy'   => 'product_cat',
            'hide_empty' => true,
        ) );
        
        $filtered_categories = array();
        if ( ! is_wp_error( $categories ) ) {
            foreach ( $categories as $cat ) {
                if ( $cat->slug === 'uncategorized' ) {
                    continue;
                }
                $filtered_categories[] = $cat;
            }
        }
        
        $shop_page_url = get_permalink( wc_get_page_id( 'shop' ) );
        
        // Find first product image for "All Products" fallback
        $all_products_image = '';
        $first_product = get_posts( array(
            'post_type'      => 'product',
            'posts_per_page' => 1,
            'post_status'    => 'publish',
        ) );
        if ( ! empty( $first_product ) ) {
            $all_products_image = get_the_post_thumbnail_url( $first_product[0]->ID, 'thumbnail' );
        }
        if ( ! $all_products_image ) {
            $all_products_image = wc_placeholder_img_src();
        }
        ?>
        <div class="shop-banner" style="background-image: url('<?php echo esc_url( get_stylesheet_directory_uri() . '/images/6.png' ); ?>');">
            <div class="shop-banner-overlay"></div>
            <div class="shop-banner-content">
                <h1 class="shop-title"><?php woocommerce_page_title(); ?></h1>
                <p class="shop-subtitle">
                    <span class="shop-slogan-label">Precision BoS:</span> 
                    <span class="shop-rotating-mission rotating-text" data-images='[]' data-words='["Smart Components for Smarter Energy", "Maximizing system lifespan and human safety", "Direct sourcing of premium Havells switchgear", "Engineering integrity, tested certifications"]'>Smart Components for Smarter Energy</span>
                </p>
            </div>
        </div>
        
        <div class="shop-categories-circles-wrapper">
            <div class="shop-categories-circles-row">
                    <a href="<?php echo esc_url( $shop_page_url ); ?>" class="shop-category-circle-item <?php echo ( is_shop() && ! is_product_category() ) ? 'active' : ''; ?>">
                        <div class="shop-category-circle-image-wrapper">
                            <img src="<?php echo esc_url( $all_products_image ); ?>" alt="All Products" loading="lazy" />
                        </div>
                        <span class="shop-category-circle-name">All Products</span>
                    </a>
                    <?php foreach ( $filtered_categories as $cat ) : 
                        $active_class = ( $current_term_id === $cat->term_id ) ? 'active' : '';
                        $cat_link = get_term_link( $cat );
                        if ( is_wp_error( $cat_link ) ) {
                            continue;
                        }
                        
                        $image_url = '';
                        $thumbnail_id = get_term_meta( $cat->term_id, 'thumbnail_id', true );
                        if ( $thumbnail_id ) {
                            $image_url = wp_get_attachment_url( $thumbnail_id );
                        }
                        
                        if ( ! $image_url ) {
                            $cat_products = get_posts( array(
                                'post_type' => 'product',
                                'posts_per_page' => -1,
                                'tax_query' => array(
                                    array(
                                        'taxonomy' => 'product_cat',
                                        'field'    => 'term_id',
                                        'terms'    => $cat->term_id,
                                    ),
                                ),
                            ) );
                            foreach ( $cat_products as $p ) {
                                $img = get_the_post_thumbnail_url( $p->ID, 'thumbnail' );
                                if ( $img ) {
                                    $image_url = $img;
                                    break;
                                }
                            }
                        }
                        
                        if ( ! $image_url ) {
                            $image_url = wc_placeholder_img_src();
                        }
                    ?>
                        <a href="<?php echo esc_url( $cat_link ); ?>" class="shop-category-circle-item <?php echo esc_attr( $active_class ); ?>">
                            <div class="shop-category-circle-image-wrapper">
                                <img src="<?php echo esc_url( $image_url ); ?>" alt="<?php echo esc_attr( $cat->name ); ?>" loading="lazy" />
                            </div>
                            <span class="shop-category-circle-name"><?php echo esc_html( $cat->name ); ?></span>
                        </a>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    <?php endif; ?>

    <?php woocommerce_content(); ?>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Wrap WooCommerce pagination in premium container
    const pagination = document.querySelector('.woocommerce-pagination');
    if (pagination) {
        const ul = pagination.querySelector('ul.page-numbers');
        if (ul) {
            ul.classList.add('premium-page-numbers');
        }
    }
});
</script>

<?php get_footer(); ?>
