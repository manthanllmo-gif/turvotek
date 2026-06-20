<?php 
get_header(); 

$cat_acdb_url = get_term_link( 'acdb-dcdb', 'product_cat' );
if ( is_wp_error( $cat_acdb_url ) ) $cat_acdb_url = get_post_type_archive_link( 'product' );

$cat_struct_url = get_term_link( 'solar-module-mounting-structure', 'product_cat' );
if ( is_wp_error( $cat_struct_url ) ) $cat_struct_url = get_post_type_archive_link( 'product' );

$cat_bos_url = get_term_link( 'balance-of-system', 'product_cat' );
if ( is_wp_error( $cat_bos_url ) ) $cat_bos_url = get_post_type_archive_link( 'product' );

$cat_inverters_url = get_term_link( 'solar-inverters', 'product_cat' );
if ( is_wp_error( $cat_inverters_url ) ) $cat_inverters_url = get_post_type_archive_link( 'product' );

$cat_wires_url = get_term_link( 'solar-wires-copper', 'product_cat' );
if ( is_wp_error( $cat_wires_url ) ) $cat_wires_url = get_post_type_archive_link( 'product' );
?>

<!-- Hero Section -->
<section class="hero-collage-section">
    <div class="hero-collage-bg"></div>
    <div class="hero-collage-overlay"></div>
    <div class="hero-collage-content container">
        <div class="hero-collage-text">
            <div class="slide-badge"><span class="badge-dot"></span>Official Havells Partner</div>
            <h1>Smart Components for <br class="hero-br-mobile"><span class="rotating-text" data-words='["Smarter Energy","Sustainable Future","Green Tomorrow","Clean Power","Net Zero"]' data-images='["<?php echo esc_url( home_url( '/assetspictures/1h.png' ) ); ?>","<?php echo esc_url( home_url( '/assetspictures/3h.png' ) ); ?>","<?php echo esc_url( home_url( '/assetspictures/5h.png' ) ); ?>","<?php echo esc_url( home_url( '/assetspictures/6h.png' ) ); ?>","<?php echo esc_url( home_url( '/assetspictures/2h.png' ) ); ?>"]'>Smarter Energy</span></h1>
            <p>Turvotek Green Energy manufactures high-durability ACDB/DCDB combo boxes, customized mounting structures, and distributes premium Balance of System (BoS) components.</p>
            <div class="slide-actions">
                <a href="<?php echo esc_url( get_post_type_archive_link( 'product' ) ); ?>" class="btn btn-primary">Browse Catalog</a>
                <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="btn btn-secondary">Get Free Quote</a>
            </div>
        </div>
        <div class="hero-collage-visual">
            <a id="heroImageLink" href="<?php echo esc_url( get_post_type_archive_link( 'product' ) ); ?>">
                <div class="hero-image-frame">
                    <div class="hero-image-shape"></div>
                    <div class="hero-image-wrapper">
                        <img id="rotatingShowcaseImage" src="<?php echo esc_url( home_url( '/assetspictures/1h.png' ) ); ?>" alt="Turvotek Showcase">
                    </div>
                    <div class="hero-image-accent"></div>
                </div>
            </a>
        </div>
    </div>
</section>

<!-- Trust Marquee Ticker -->
<section class="trust-marquee-section">
    <div class="trust-marquee-container">
        <div class="trust-marquee-track">
            <!-- Set 1 -->
            <div class="trust-item">
                <svg viewBox="0 0 24 24" width="18" height="18" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path><path d="m9 11 2 2 4-4"></path></svg>
                <span>MNRE Approved Channel Partner</span>
            </div>
            <div class="trust-item">
                <svg viewBox="0 0 24 24" width="18" height="18" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="8" r="7"></circle><polyline points="8.21 13.89 7 23 12 20 17 23 15.79 13.88"></polyline></svg>
                <span>ISO 9001:2015 Certified</span>
            </div>
            <div class="trust-item">
                <svg viewBox="0 0 24 24" width="18" height="18" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="3"></circle><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 1 1-2.83 2.83l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-4 0v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 1 1-2.83-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1 0-4h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 1 1 2.83-2.83l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 4 0v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 1 1 2.83 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 0 4h-.09a1.65 1.65 0 0 0-1.51 1z"></path></svg>
                <span>Made In India Manufacturing</span>
            </div>
            <div class="trust-item">
                <svg viewBox="0 0 24 24" width="18" height="18" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round"><rect x="1" y="3" width="15" height="13"></rect><polygon points="16 8 20 8 23 11 23 16 16 16 16 8"></polygon><circle cx="5.5" cy="18.5" r="2.5"></circle><circle cx="18.5" cy="18.5" r="2.5"></circle></svg>
                <span>Pan-India Logistics & Delivery</span>
            </div>
            <div class="trust-item">
                <svg viewBox="0 0 24 24" width="18" height="18" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="5"></circle><line x1="12" y1="1" x2="12" y2="3"></line><line x1="12" y1="21" x2="12" y2="23"></line><line x1="4.22" y1="4.22" x2="5.64" y2="5.64"></line><line x1="18.36" y1="18.36" x2="19.78" y2="19.78"></line><line x1="1" y1="12" x2="3" y2="12"></line><line x1="21" y1="12" x2="23" y2="12"></line><line x1="4.22" y1="19.78" x2="5.64" y2="18.36"></line><line x1="18.36" y1="5.64" x2="19.78" y2="4.22"></line></svg>
                <span>Tier-1 Distributed Components</span>
            </div>
            <div class="trust-item">
                <svg viewBox="0 0 24 24" width="18" height="18" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round"><path d="M14 9V5a3 3 0 0 0-3-3l-4 9v11h11.28a2 2 0 0 0 2-1.7l1.38-9a2 2 0 0 0-2-2.3zM7 22H4a2 2 0 0 1-2-2v-7a2 2 0 0 1 2-2h3"></path></svg>
                <span>10+ Years of Solar Expertise</span>
            </div>

            <!-- Set 2 (Duplicate for Seamless Loop) -->
            <div class="trust-item">
                <svg viewBox="0 0 24 24" width="18" height="18" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path><path d="m9 11 2 2 4-4"></path></svg>
                <span>MNRE Approved Channel Partner</span>
            </div>
            <div class="trust-item">
                <svg viewBox="0 0 24 24" width="18" height="18" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="8" r="7"></circle><polyline points="8.21 13.89 7 23 12 20 17 23 15.79 13.88"></polyline></svg>
                <span>ISO 9001:2015 Certified</span>
            </div>
            <div class="trust-item">
                <svg viewBox="0 0 24 24" width="18" height="18" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="3"></circle><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 1 1-2.83 2.83l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-4 0v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 1 1-2.83-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1 0-4h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 1 1 2.83-2.83l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 4 0v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 1 1 2.83 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 0 4h-.09a1.65 1.65 0 0 0-1.51 1z"></path></svg>
                <span>Made In India Manufacturing</span>
            </div>
            <div class="trust-item">
                <svg viewBox="0 0 24 24" width="18" height="18" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round"><rect x="1" y="3" width="15" height="13"></rect><polygon points="16 8 20 8 23 11 23 16 16 16 16 8"></polygon><circle cx="5.5" cy="18.5" r="2.5"></circle><circle cx="18.5" cy="18.5" r="2.5"></circle></svg>
                <span>Pan-India Logistics & Delivery</span>
            </div>
            <div class="trust-item">
                <svg viewBox="0 0 24 24" width="18" height="18" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="5"></circle><line x1="12" y1="1" x2="12" y2="3"></line><line x1="12" y1="21" x2="12" y2="23"></line><line x1="4.22" y1="4.22" x2="5.64" y2="5.64"></line><line x1="18.36" y1="18.36" x2="19.78" y2="19.78"></line><line x1="1" y1="12" x2="3" y2="12"></line><line x1="21" y1="12" x2="23" y2="12"></line><line x1="4.22" y1="19.78" x2="5.64" y2="18.36"></line><line x1="18.36" y1="5.64" x2="19.78" y2="4.22"></line></svg>
                <span>Tier-1 Distributed Components</span>
            </div>
            <div class="trust-item">
                <svg viewBox="0 0 24 24" width="18" height="18" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round"><path d="M14 9V5a3 3 0 0 0-3-3l-4 9v11h11.28a2 2 0 0 0 2-1.7l1.38-9a2 2 0 0 0-2-2.3zM7 22H4a2 2 0 0 1-2-2v-7a2 2 0 0 1 2-2h3"></path></svg>
                <span>10+ Years of Solar Expertise</span>
            </div>
        </div>
    </div>
</section>

<!-- Company Intro -->
<section class="section" style="background-color: var(--cloud);">
    <div class="container">
        <div style="max-width: 800px; margin: 0 auto; text-align: center; margin-bottom: var(--spacing-xxl);">
            <div style="font-size: 12px; font-weight: 700; color: var(--primary); text-transform: uppercase; letter-spacing: 2px; margin-bottom: var(--spacing-xs);">Introduction</div>
            <h2 style="font-size: 38px;">Turvotek Green Energy Pvt. Ltd.</h2>
            <p style="font-size: 18px; line-height: 1.8; color: var(--graphite);">
                A premier solar energy solutions company engaged in the manufacturing of ACDB, DCDB, solar mounting structures, and the nationwide distribution of high-efficiency solar power components.
            </p>
        </div>
        
        <?php 
        $acdb_link = get_term_link( 'acdb-dcdb', 'product_cat' );
        $acdb_url = ! is_wp_error( $acdb_link ) ? $acdb_link : get_post_type_archive_link( 'product' );

        $structure_link = get_term_link( 'solar-module-mounting-structure', 'product_cat' );
        $structure_url = ! is_wp_error( $structure_link ) ? $structure_link : get_post_type_archive_link( 'product' );

        $bos_link = get_term_link( 'balance-of-system', 'product_cat' );
        $bos_url = ! is_wp_error( $bos_link ) ? $bos_link : get_post_type_archive_link( 'product' );
        ?>
        <!-- Product Line overview -->
        <div class="intro-cards-grid" style="margin-top: 50px;">
            <a href="<?php echo esc_url( $acdb_url ); ?>" class="intro-card" style="background-image: url('<?php echo esc_url( get_stylesheet_directory_uri() . '/images/dcdb box single phase(havells switchgear).png' ); ?>');">
                <div class="intro-card-overlay"></div>
                <div class="intro-card-content">
                    <h3 class="intro-card-title">ACDB & DCDB Systems</h3>
                    <p class="intro-card-desc">
                        Custom-built AC/DC Distribution Boxes equipped with surge protection (SPD) and isolators.
                    </p>
                    <span class="intro-card-link">
                        Explore Category <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                    </span>
                </div>
            </a>
            <a href="<?php echo esc_url( $structure_url ); ?>" class="intro-card" style="background-image: url('<?php echo esc_url( get_stylesheet_directory_uri() . '/images/gi weldmesh.png' ); ?>');">
                <div class="intro-card-overlay"></div>
                <div class="intro-card-content">
                    <h3 class="intro-card-title">Solar Structures</h3>
                    <p class="intro-card-desc">
                        Galvanized and aluminium solar panel mounting structures built to handle Indian wind speeds.
                    </p>
                    <span class="intro-card-link">
                        Explore Category <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                    </span>
                </div>
            </a>
            <a href="<?php echo esc_url( $bos_url ); ?>" class="intro-card" style="background-image: url('<?php echo esc_url( get_stylesheet_directory_uri() . '/images/Chain link.png' ); ?>');">
                <div class="intro-card-overlay"></div>
                <div class="intro-card-content">
                    <h3 class="intro-card-title">BoS Components</h3>
                    <p class="intro-card-desc">
                        Complete Balance of System (BoS) procurement: solar wires, conduits, earthing rods, and connectors.
                    </p>
                    <span class="intro-card-link">
                        Explore Category <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                    </span>
                </div>
            </a>
        </div>
    </div>
</section>

<?php
$categories = get_terms( array(
    'taxonomy'   => 'product_cat',
    'hide_empty' => true,
) );

$filtered_categories = array();
foreach ( $categories as $cat ) {
    if ( $cat->slug === 'uncategorized' ) {
        continue;
    }
    $filtered_categories[] = $cat;
}

if ( ! empty( $filtered_categories ) ) :
    $active_cat = $filtered_categories[0];
?>
<!-- Browse by Category Section -->
<section class="category-browser-section">
    <div class="container">
        <div class="category-browser-title-wrapper">
            <div style="font-size: 11px; font-weight: 700; color: var(--primary); text-transform: uppercase; letter-spacing: 1.5px; margin-bottom: var(--spacing-xxs);">Shop By Category</div>
            <h2>Premium Solar Solutions</h2>
            <p>Select a category below to explore our products.</p>
        </div>
        
        <div class="category-slider-wrapper">
            <button class="slider-nav prev-btn" aria-label="Previous categories">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="15 18 9 12 15 6"></polyline></svg>
            </button>
            <div class="category-browser-row">
                <?php foreach ( $filtered_categories as $index => $cat ) :
                    $is_active = ( $index === 0 );
                    $active_class = $is_active ? 'active' : '';
                    
                    // Get term thumbnail
                    $thumbnail_id = get_term_meta( $cat->term_id, 'thumbnail_id', true );
                    $image_url = wp_get_attachment_url( $thumbnail_id );
                    
                    if ( ! $image_url ) {
                        // Fallback to first product's thumbnail in this category
                        $products = get_posts( array(
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
                        foreach ( $products as $p ) {
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
                    <button class="category-circle-item <?php echo esc_attr( $active_class ); ?>" data-slug="<?php echo esc_attr( $cat->slug ); ?>" aria-label="<?php echo esc_attr( $cat->name ); ?>">
                        <div class="category-circle-image-wrapper">
                            <img src="<?php echo esc_url( $image_url ); ?>" alt="<?php echo esc_attr( $cat->name ); ?>" loading="lazy" />
                        </div>
                        <span class="category-circle-name"><?php echo esc_html( $cat->name ); ?></span>
                    </button>
                <?php endforeach; ?>
            </div>
            <button class="slider-nav next-btn" aria-label="Next categories">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="9 18 15 12 9 6"></polyline></svg>
            </button>
        </div>
        
        <div class="woocommerce category-products-wrapper product-slider-wrapper" id="category-products-wrapper">
            <!-- Loading Overlay -->
            <div class="category-products-loading-overlay" id="category-products-loading" style="display: none;">
                <div class="category-products-spinner"></div>
                <span style="font-size: 13px; font-weight: 600; color: var(--primary);">Loading products...</span>
            </div>

            <button class="slider-nav prev-btn" aria-label="Previous products" style="opacity: 0; pointer-events: none;">
                <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>
            </button>
            
            <div class="product-slider">
                <div id="category-products-target">
                    <?php
                    // Query first category products
                    $args = array(
                        'post_type'      => 'product',
                        'posts_per_page' => 12,
                        'post_status'    => 'publish',
                        'tax_query'      => array(
                            array(
                                'taxonomy' => 'product_cat',
                                'field'    => 'slug',
                                'terms'    => $active_cat->slug,
                            ),
                        ),
                    );
                    $initial_loop = new WP_Query( $args );
                    if ( $initial_loop->have_posts() ) : ?>
                        <ul class="products columns-4">
                            <?php while ( $initial_loop->have_posts() ) : $initial_loop->the_post(); ?>
                                <?php wc_get_template_part( 'content', 'product' ); ?>
                            <?php endwhile; ?>
                        </ul>
                    <?php else : ?>
                        <p class="no-products-found" style="text-align: center; color: var(--graphite); padding: 60px 0; font-size: 16px; width: 100%;">No products found in this category.</p>
                    <?php endif;
                    wp_reset_postdata();
                    ?>
                </div>
            </div>

            <button class="slider-nav next-btn" aria-label="Next products" style="opacity: 0; pointer-events: none;">
                <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
            </button>
        </div>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const categoryButtons = document.querySelectorAll('.category-circle-item');
    const productsWrapper = document.getElementById('category-products-wrapper');
    const productsTarget = document.getElementById('category-products-target');
    const loadingOverlay = document.getElementById('category-products-loading');
    
    if (!categoryButtons.length || !productsTarget || !loadingOverlay) return;
    
    categoryButtons.forEach(button => {
        button.addEventListener('click', function() {
            // Do nothing if already active
            if (this.classList.contains('active')) return;
            
            // Remove active class from all buttons
            categoryButtons.forEach(btn => btn.classList.remove('active'));
            this.classList.add('active');
            
            const slug = this.dataset.slug;
            if (!slug) return;
            
            // Show loading state
            productsWrapper.classList.add('loading');
            loadingOverlay.style.display = 'flex';
            
            // Fetch products via AJAX
            const ajaxUrl = '<?php echo esc_url( admin_url( 'admin-ajax.php' ) ); ?>?action=turvotek_get_category_products&category_slug=' + encodeURIComponent(slug);
            
            fetch(ajaxUrl)
                .then(response => {
                    if (!response.ok) {
                        throw new Error('Network response was not ok');
                    }
                    return response.json();
                })
                .then(data => {
                    if (data.success && data.data && data.data.html) {
                        productsTarget.innerHTML = data.data.html;
                        // Reset scroll to start
                        const slider = productsWrapper.querySelector('.product-slider ul.products');
                        if (slider) {
                            slider.scrollLeft = 0;
                        }
                    } else {
                        productsTarget.innerHTML = '<p class="no-products-found" style="text-align: center; color: var(--graphite); padding: 60px 0; font-size: 16px; width: 100%;">No products found in this category.</p>';
                    }
                })
                .catch(error => {
                    console.error('Error fetching category products:', error);
                    productsTarget.innerHTML = '<p class="no-products-found" style="text-align: center; color: var(--error); padding: 60px 0; font-size: 16px; width: 100%;">Unable to load products. Please try again.</p>';
                })
                .finally(() => {
                    // Hide loading state
                    productsWrapper.classList.remove('loading');
                    loadingOverlay.style.display = 'none';
                    
                    // Trigger slider navigation arrows update
                    const slider = productsWrapper.querySelector('.product-slider ul.products');
                    if (slider) {
                        slider.dispatchEvent(new Event('scroll', { bubbles: true }));
                    } else {
                        window.dispatchEvent(new Event('resize'));
                    }
                });
        });
    });
    
    // Category Slider scroll/button logic
    const categoryWrapper = document.querySelector('.category-slider-wrapper');
    if (categoryWrapper) {
        const categorySlider = categoryWrapper.querySelector('.category-browser-row');
        const catPrevBtn = categoryWrapper.querySelector('.slider-nav.prev-btn');
        const catNextBtn = categoryWrapper.querySelector('.slider-nav.next-btn');
        
        if (categorySlider && catPrevBtn && catNextBtn) {
            // Next button click
            catNextBtn.addEventListener('click', function() {
                const scrollAmount = categorySlider.offsetWidth * 0.75;
                categorySlider.scrollBy({ left: scrollAmount, behavior: 'smooth' });
            });
            
            // Prev button click
            catPrevBtn.addEventListener('click', function() {
                const scrollAmount = categorySlider.offsetWidth * 0.75;
                categorySlider.scrollBy({ left: -scrollAmount, behavior: 'smooth' });
            });
            
            // Update visibility of arrows
            function updateCategoryNavButtons() {
                const scrollLeft = categorySlider.scrollLeft;
                const maxScroll = categorySlider.scrollWidth - categorySlider.clientWidth;
                
                if (scrollLeft <= 5) {
                    catPrevBtn.style.opacity = '0';
                    catPrevBtn.style.pointerEvents = 'none';
                } else {
                    catPrevBtn.style.opacity = '1';
                    catPrevBtn.style.pointerEvents = 'auto';
                }
                
                if (scrollLeft >= maxScroll - 5) {
                    catNextBtn.style.opacity = '0';
                    catNextBtn.style.pointerEvents = 'none';
                } else {
                    catNextBtn.style.opacity = '1';
                    catNextBtn.style.pointerEvents = 'auto';
                }
            }
            
            categorySlider.addEventListener('scroll', updateCategoryNavButtons);
            window.addEventListener('resize', updateCategoryNavButtons);
            
            // Initial check
            updateCategoryNavButtons();
            setTimeout(updateCategoryNavButtons, 300);
            setTimeout(updateCategoryNavButtons, 800);
            setTimeout(updateCategoryNavButtons, 2000);
        }
    }
});
</script>
<?php endif; ?>

<!-- Explore Products Section (Individual Sliders) -->
<?php
if ( ! function_exists( 'turvotek_render_product_slider' ) ) {
    function turvotek_render_product_slider( $title, $subtitle, $query_args, $bg_color = 'var(--canvas)' ) {
        $loop = new WP_Query( $query_args );
        if ( $loop->have_posts() ) : ?>
            <section class="section product-slider-section" style="background-color: <?php echo esc_attr( $bg_color ); ?>; padding: 60px 0;">
                <div class="container">
                    <div style="margin-bottom: var(--spacing-lg); display: flex; justify-content: space-between; align-items: flex-end; border-bottom: 1px solid var(--hairline); padding-bottom: var(--spacing-sm);">
                        <div>
                            <div style="font-size: 11px; font-weight: 700; color: var(--primary); text-transform: uppercase; letter-spacing: 1.5px; margin-bottom: var(--spacing-xxs);"><?php echo esc_html( $subtitle ); ?></div>
                            <h2 style="font-size: 28px; margin: 0; font-family: var(--font-display); font-weight: 700; color: var(--text);"><?php echo esc_html( $title ); ?></h2>
                        </div>
                    </div>
                    <div class="woocommerce product-slider-wrapper">
                        <button class="slider-nav prev-btn" aria-label="Previous products">
                            <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>
                        </button>
                        <div class="product-slider">
                            <ul class="products columns-4">
                                <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
                                    <?php wc_get_template_part( 'content', 'product' ); ?>
                                <?php endwhile; ?>
                            </ul>
                        </div>
                        <button class="slider-nav next-btn" aria-label="Next products">
                            <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                        </button>
                    </div>
                </div>
            </section>
        <?php endif;
        wp_reset_postdata();
    }
}

// 1. Best Selling Products
turvotek_render_product_slider(
    'Best Selling Products',
    'Popular Choices',
    array(
        'post_type'      => 'product',
        'posts_per_page' => 10,
        'post_status'    => 'publish',
        'meta_key'       => 'total_sales',
        'orderby'        => 'meta_value_num',
        'order'          => 'DESC',
    ),
    'var(--canvas)'
);

// 2. Trending Products
turvotek_render_product_slider(
    'Trending Products',
    'New Arrivals',
    array(
        'post_type'      => 'product',
        'posts_per_page' => 10,
        'post_status'    => 'publish',
        'orderby'        => 'date',
        'order'          => 'DESC',
    ),
    'var(--cloud)'
);
?>

<!-- Specialties & Trust Section -->
<section class="specialties-section">
    <div class="container">
        <div class="specialties-grid">
            <!-- Left Side: Framed Image Carousel -->
            <div class="specialties-visual">
                <div class="spec-image-frame">
                    <div class="spec-image-shape"></div>
                    <div class="spec-image-wrapper">
                        <img id="specCarouselImage" src="<?php echo esc_url( get_stylesheet_directory_uri() . '/images/dcdb box single phase(havells switchgear).png' ); ?>" alt="Turvotek Products">
                    </div>
                    <div class="spec-image-accent"></div>
                </div>
            </div>

            <!-- Right Side: Content -->
            <div class="specialties-content">
                <div class="section-subtitle">Precision Engineering</div>
                <h2 class="section-title">Reaching for <span class="rotating-text" data-image-id="specCarouselImage" data-words='["Endless Growth","Sustainable Vision","Cleaner Tomorrow","Net Zero Future","Green Innovation"]' data-images='["<?php echo esc_url( get_stylesheet_directory_uri() . '/images/dcdb box single phase(havells switchgear).png' ); ?>","<?php echo esc_url( get_stylesheet_directory_uri() . '/images/gi weldmesh.png' ); ?>","<?php echo esc_url( get_stylesheet_directory_uri() . '/images/Chain link.png' ); ?>","<?php echo esc_url( home_url( '/assetspictures/4h.png' ) ); ?>","<?php echo esc_url( home_url( '/assetspictures/6h.png' ) ); ?>"]'>Endless Growth</span></h2>
                
                <p class="section-desc">
                    At Turvotek, our achievements are defined by measurable success. With 100+ projects completed in various sectors, we have created an extensive portfolio of satisfied clients. Our expertise in solar solutions spans across multiple states, making us a trusted name in renewable energy. As a team, we've facilitated energy savings equivalent to planting 50,000 trees, showing our tangible contribution to sustainability.
                </p>
                <div style="margin-top: var(--spacing-lg); text-align: left;">
                    <a href="<?php echo esc_url( get_post_type_archive_link( 'product' ) ); ?>" class="btn btn-primary">
                        View Product Range <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" style="margin-left: 6px; vertical-align: middle;"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                    </a>
                </div>
            </div>
        </div>

        <!-- Metrics at bottom -->
        <div class="specialties-metrics">
            <div class="metric-item">
                <div class="metric-value">10+ years</div>
                <div class="metric-label">of excellence in manufacturing & service</div>
            </div>
            <div class="metric-item">
                <div class="metric-value">500+</div>
                <div class="metric-label">Happy Clients across diverse sectors</div>
            </div>
            <div class="metric-item">
                <div class="metric-value">3+</div>
                <div class="metric-label">Segments of manufacturing operations</div>
            </div>
            <div class="metric-item">
                <div class="metric-value">EPC</div>
                <div class="metric-label">End to End Solutions for Solar, Preform & Fencing</div>
            </div>
        </div>
    </div>
</section>

<?php
// 3. Solar Essentials
turvotek_render_product_slider(
    'Solar Essentials',
    'Mounting & Structures',
    array(
        'post_type'      => 'product',
        'posts_per_page' => 10,
        'post_status'    => 'publish',
        'tax_query'      => array(
            array(
                'taxonomy' => 'product_cat',
                'field'    => 'slug',
                'terms'    => array( 'solar-structure-accessories', 'solar-module-mounting-structure' ),
            ),
        ),
    ),
    'var(--canvas)'
);

// 4. ACDB & DCDB Systems
turvotek_render_product_slider(
    'ACDB & DCDB Systems',
    'Distribution & Protection',
    array(
        'post_type'      => 'product',
        'posts_per_page' => 10,
        'post_status'    => 'publish',
        'tax_query'      => array(
            array(
                'taxonomy' => 'product_cat',
                'field'    => 'slug',
                'terms'    => array( 'acdb-dcdb' ),
            ),
        ),
    ),
    'var(--cloud)'
);

// 4b. Team Thanks Section
?>
<section class="team-thanks-section">
    <div class="container">
        <div class="team-thanks-grid">
            <!-- Left Side: Mosaic Collage of Images -->
            <div class="team-mosaic">
                <div class="mosaic-item main-img">
                    <img src="<?php echo esc_url( home_url( '/assetspictures/team1.webp' ) ); ?>" alt="Team working" class="mosaic-image">
                </div>
                <div class="mosaic-sub-grid">
                    <div class="mosaic-item sub-img">
                        <img src="<?php echo esc_url( home_url( '/assetspictures/team2.jpg' ) ); ?>" alt="Manufacturing" class="mosaic-image">
                    </div>
                    <div class="mosaic-item sub-img">
                        <img src="<?php echo esc_url( home_url( '/assetspictures/team3.webp' ) ); ?>" alt="Operations" class="mosaic-image">
                    </div>
                </div>
            </div>
            
            <!-- Right Side: Content & Thanks -->
            <div class="team-thanks-content">
                <div class="section-subtitle">
                    <span class="badge-dot"></span>
                    Our Dedicated Workforce
                </div>
                <h2 class="section-title">Driven by Hard Work</h2>
                <p class="thanks-text">
                    Behind every high-performance ACDB/DCDB combo box, precision-crafted mounting structure, and successful installation is the dedication of our skilled workforce. We extend our heartfelt thanks to the team powering our progress daily with craftsmanship and commitment to quality.
                </p>
            </div>
        </div>
    </div>
</section>
<?php

// 5. Inverters & Cables
turvotek_render_product_slider(
    'Inverters & Cables',
    'Balance of System',
    array(
        'post_type'      => 'product',
        'posts_per_page' => 10,
        'post_status'    => 'publish',
        'tax_query'      => array(
            array(
                'taxonomy' => 'product_cat',
                'field'    => 'slug',
                'terms'    => array( 'solar-inverters', 'solar-wires-copper', 'balance-of-system' ),
            ),
        ),
    ),
    'var(--canvas)'
);
?>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Slider Navigation (Event Delegation)
    document.addEventListener('click', function(e) {
        // Handle Next Click
        const nextBtn = e.target.closest('.slider-nav.next-btn');
        if (nextBtn) {
            const wrapper = nextBtn.closest('.product-slider-wrapper');
            const slider = wrapper.querySelector('.product-slider ul.products');
            if (slider) {
                const scrollAmount = slider.offsetWidth * 0.75;
                slider.scrollBy({ left: scrollAmount, behavior: 'smooth' });
            }
        }
        
        // Handle Prev Click
        const prevBtn = e.target.closest('.slider-nav.prev-btn');
        if (prevBtn) {
            const wrapper = prevBtn.closest('.product-slider-wrapper');
            const slider = wrapper.querySelector('.product-slider ul.products');
            if (slider) {
                const scrollAmount = slider.offsetWidth * 0.75;
                slider.scrollBy({ left: -scrollAmount, behavior: 'smooth' });
            }
        }
    });
    
    // Update Nav buttons visibility based on scroll position
    function updateNavButtons() {
        const wrappers = document.querySelectorAll('.product-slider-wrapper');
        wrappers.forEach(wrapper => {
            const slider = wrapper.querySelector('.product-slider ul.products');
            const prevBtn = wrapper.querySelector('.slider-nav.prev-btn');
            const nextBtn = wrapper.querySelector('.slider-nav.next-btn');
            
            if (!slider || !prevBtn || !nextBtn) {
                if (prevBtn) {
                    prevBtn.style.opacity = '0';
                    prevBtn.style.pointerEvents = 'none';
                }
                if (nextBtn) {
                    nextBtn.style.opacity = '0';
                    nextBtn.style.pointerEvents = 'none';
                }
                return;
            }
            
            const scrollLeft = slider.scrollLeft;
            const maxScroll = slider.scrollWidth - slider.clientWidth;
            
            // Hide prev button if scrolled to the left
            if (scrollLeft <= 5) {
                prevBtn.style.opacity = '0';
                prevBtn.style.pointerEvents = 'none';
            } else {
                prevBtn.style.opacity = '1';
                prevBtn.style.pointerEvents = 'auto';
            }
            
            // Hide next button if scrolled to the right
            if (scrollLeft >= maxScroll - 5) {
                nextBtn.style.opacity = '0';
                nextBtn.style.pointerEvents = 'none';
            } else {
                nextBtn.style.opacity = '1';
                nextBtn.style.pointerEvents = 'auto';
            }
        });
    }
    
    // Listen to scroll events on sliders (using event capture)
    document.addEventListener('scroll', function(e) {
        if (e.target.tagName === 'UL' && e.target.classList.contains('products')) {
            updateNavButtons();
        }
    }, true);
    
    // Update buttons initially and on window resize
    updateNavButtons();
    window.addEventListener('resize', updateNavButtons);
    
    // Periodically double check scroll widths as images load
    setTimeout(updateNavButtons, 500);
    setTimeout(updateNavButtons, 1500);
});
</script>

<!-- Why Choose Us -->
<?php 
$upload_dir = wp_upload_dir();
$upload_url = $upload_dir['baseurl'];
?>
<section class="section">
    <div class="container">
        <h2 style="text-align: center; font-size: 38px; margin-bottom: var(--spacing-xxl);">Why Choose Turvotek?</h2>
        
        <div class="choose-cards-grid">
            <?php 
            $cat_havells_link = get_term_link( 'solar-wires-copper', 'product_cat' );
            if ( is_wp_error( $cat_havells_link ) ) {
                $cat_havells_link = get_post_type_archive_link( 'product' );
            }
            ?>
            <a href="<?php echo esc_url( $cat_havells_link ); ?>" class="choose-card" style="background-image: url('<?php echo esc_url( $upload_url . '/2026/06/havells%20dc%20cables.png' ); ?>');">
                <div class="choose-card-overlay"></div>
                <div class="choose-card-content">
                    <h3 class="choose-card-title">✓ Authorized Havells Dealer</h3>
                    <p class="choose-card-desc">
                        We procure directly from Havells to guarantee genuine components, manufacturer warranty, and safety.
                    </p>
                    <span class="choose-card-link">
                        Explore Cables <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" style="vertical-align: middle;"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                    </span>
                </div>
            </a>
            
            <?php 
            $cat_statcon_link = get_term_link( 'solar-inverters', 'product_cat' );
            if ( is_wp_error( $cat_statcon_link ) ) {
                $cat_statcon_link = get_post_type_archive_link( 'product' );
            }
            ?>
            <a href="<?php echo esc_url( $cat_statcon_link ); ?>" class="choose-card" style="background-image: url('<?php echo esc_url( $upload_url . '/2026/06/statcon%20solar%20inverter.png' ); ?>');">
                <div class="choose-card-overlay"></div>
                <div class="choose-card-content">
                    <h3 class="choose-card-title">✓ Statcon Energiaa Distributor</h3>
                    <p class="choose-card-desc">
                        Authorized distributor of Statcon Energiaa hybrid and industrial solar inverters.
                    </p>
                    <span class="choose-card-link">
                        Explore Inverters <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" style="vertical-align: middle;"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                    </span>
                </div>
            </a>
            
            <?php 
            $cat_eng_link = get_term_link( 'solar-module-mounting-structure', 'product_cat' );
            if ( is_wp_error( $cat_eng_link ) ) {
                $cat_eng_link = get_post_type_archive_link( 'product' );
            }
            ?>
            <a href="<?php echo esc_url( $cat_eng_link ); ?>" class="choose-card" style="background-image: url('<?php echo esc_url( $upload_url . '/2026/06/rafter.png' ); ?>');">
                <div class="choose-card-overlay"></div>
                <div class="choose-card-content">
                    <h3 class="choose-card-title">✓ Experienced Engineering Team</h3>
                    <p class="choose-card-desc">
                        Over 50+ combined years of experience in manufacturing, project management, and design.
                    </p>
                    <span class="choose-card-link">
                        Explore Structures <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" style="vertical-align: middle;"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                    </span>
                </div>
            </a>
            
            <?php 
            $cat_pricing_link = get_term_link( 'balance-of-system', 'product_cat' );
            if ( is_wp_error( $cat_pricing_link ) ) {
                $cat_pricing_link = get_post_type_archive_link( 'product' );
            }
            ?>
            <a href="<?php echo esc_url( $cat_pricing_link ); ?>" class="choose-card" style="background-image: url('<?php echo esc_url( $upload_url . '/2026/06/mc4%20connector.png' ); ?>');">
                <div class="choose-card-overlay"></div>
                <div class="choose-card-content">
                    <h3 class="choose-card-title">✓ Competitive Factory Pricing</h3>
                    <p class="choose-card-desc">
                        Direct-to-consumer and B2B pricing model, ensuring maximum margin for installers and project builders.
                    </p>
                    <span class="choose-card-link">
                        Explore Components <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" style="vertical-align: middle;"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                    </span>
                </div>
            </a>
        </div>
    </div>
</section>

<!-- Brand Credential Section -->
<section class="section dark-section" style="padding: 80px 0; text-align: center;">
    <div class="container">
        <h2 style="font-size: 36px; margin-bottom: var(--spacing-md);">Ready to transition to solar?</h2>
        <p style="font-size: 18px; max-width: 600px; margin: 0 auto var(--spacing-xl) auto; line-height: 1.6;">
            Speak directly with our technical sales engineers for tailored solutions, panel selections, and structural design calculations.
        </p>
        <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="btn btn-primary" style="background-color: var(--primary-bright);">Get in Touch</a>
    </div>
</section>

<?php get_footer(); ?>
