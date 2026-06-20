<?php
/**
 * Template Name: About Page
 */
get_header(); ?>

<div class="container section">
    <!-- Header banner -->
    <div class="page-banner">
        <div class="page-banner-overlay"></div>
        <div class="page-banner-content">
            <h1 class="page-title">About Turvotek Green Energy</h1>
            <p class="shop-subtitle">
                <span class="shop-slogan-label">Our Mission:</span>
                <span class="shop-rotating-mission rotating-text" data-images='[]' data-words='["Reliable & cost-effective solar components", "Maximizing system lifespan and human safety", "Engineering integrity, quality first", "Direct sourcing of premium switchgear"]'>Maximizing system lifespan and human safety</span>
            </p>
        </div>
    </div>

    <!-- Company Story Section with Background Image (Premium) -->
    <div class="about-story-bg" style="background-image: url('<?php echo esc_url( home_url( '/assetspictures/qaza.jpeg' ) ); ?>');">
        <div class="about-story-bg-overlay"></div>
        <div class="about-story-bg-content">
            <h2>Our Story</h2>
            <p>
                Established in 2025 as a backward integration initiative of <strong>Mittal Solar (Mittal Plastomet Ltd)</strong>, Turvotek operates a state-of-the-art manufacturing and assembly facility in Mandideep. By integrating premium Havells switchgear and custom-engineered structures, we deliver safe, durable, and highly efficient solar Balance of System (BoS) solutions.
            </p>
        </div>
    </div>

    <!-- Interactive milestones timeline -->
    <div class="about-milestones-section">
        <div class="about-milestones-title">
            <h2>Our Journey & Milestones</h2>
            <p>A timeline of our achievements, backward integration, and strategic partnerships.</p>
        </div>
        <div class="about-timeline">
            <div class="about-timeline-item left">
                <div class="about-timeline-content">
                    <span class="about-timeline-year">2025</span>
                    <span class="about-timeline-label">Foundational Setup</span>
                    <p class="about-timeline-desc">Incorporation and initial integration planning as a backward integration initiative of Mittal Solar.</p>
                </div>
            </div>
            <div class="about-timeline-item right">
                <div class="about-timeline-content">
                    <span class="about-timeline-year">2026</span>
                    <span class="about-timeline-label">Manufacturing Commissioning</span>
                    <p class="about-timeline-desc">State-of-the-art assembly line setup and facility commissioning at Mandideep.</p>
                </div>
            </div>
            <div class="about-timeline-item left">
                <div class="about-timeline-content">
                    <span class="about-timeline-year">2026</span>
                    <span class="about-timeline-label">Partnerships & Authorisations</span>
                    <p class="about-timeline-desc">Secured authorised Havells Dealership and became distributor for Statcon Energiaa.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Mission & Vision with grey overlay backgrounds -->
    <div class="about-mv-container">
        <!-- Mission card: background image is 1.jpg -->
        <div class="about-mv-card" style="background-image: url('<?php echo esc_url( home_url( '/assetspictures/1.jpg' ) ); ?>');">
            <div class="about-mv-card-overlay"></div>
            <div class="about-mv-card-content">
                <div class="about-mv-card-icon">🎯</div>
                <h3 class="about-mv-card-title">Our Mission</h3>
                <p class="about-mv-card-text">
                    To design, manufacture, and deliver extremely reliable and cost-effective solar power distribution components and hardware that maximize system lifespan and ensure human safety.
                </p>
            </div>
        </div>
        
        <!-- Vision card: background image is 1.jpg -->
        <div class="about-mv-card" style="background-image: url('<?php echo esc_url( home_url( '/assetspictures/1.jpg' ) ); ?>');">
            <div class="about-mv-card-overlay"></div>
            <div class="about-mv-card-content">
                <div class="about-mv-card-icon">👁️</div>
                <h3 class="about-mv-card-title">Our Vision</h3>
                <p class="about-mv-card-text">
                    To become India's most trusted solar component brand, known for engineering integrity, premium component integration, and unparalleled customer service.
                </p>
            </div>
        </div>
    </div>

    <!-- Manufacturing & Quality Section -->
    <div class="about-mfg-section">
        <div class="about-mfg-grid">
            <!-- Left: Text content -->
            <div class="about-mfg-content">
                <div class="section-subtitle">
                    <span class="badge-dot"></span>
                    Manufacturing Experience & Quality
                </div>
                <h2 class="section-title">Precision Engineering & Testing</h2>
                <p class="mfg-text">
                    Located in Mandideep, our state-of-the-art facility integrates advanced assembly lines, metal fabrication, and electrical testing systems.
                </p>
                <p class="mfg-text">
                    From automated switchgear integration to rigorous weight integrity and weatherproofing tests, we maintain uncompromising quality standards at every phase of production.
                </p>
            </div>
            
            <!-- Right: 4-Image Mosaic Collage -->
            <div class="about-mfg-mosaic">
                <div class="mfg-mosaic-item">
                    <img src="<?php echo esc_url( home_url( '/assetspictures/aboutus1.avif' ) ); ?>" alt="Manufacturing Facility" class="mfg-mosaic-image">
                </div>
                <div class="mfg-mosaic-item">
                    <img src="<?php echo esc_url( home_url( '/assetspictures/aboutus2.jpg' ) ); ?>" alt="Precision Assembly" class="mfg-mosaic-image">
                </div>
                <div class="mfg-mosaic-item">
                    <img src="<?php echo esc_url( home_url( '/assetspictures/aboutus3.jpg' ) ); ?>" alt="Quality Control" class="mfg-mosaic-image">
                </div>
                <div class="mfg-mosaic-item">
                    <img src="<?php echo esc_url( home_url( '/assetspictures/aboutus4.jfif' ) ); ?>" alt="Finished Products" class="mfg-mosaic-image">
                </div>
            </div>
        </div>
    </div>

    <!-- Core Values with celebrating wins background & glassmorphism -->
    <div class="about-values-section" style="background-image: url('<?php echo esc_url( get_stylesheet_directory_uri() . '/images/founders_celebration.png' ); ?>');">
        <div class="about-values-overlay"></div>
        <div class="about-values-content">
            <h2 class="about-values-title">Core Corporate Values</h2>
            <div class="about-values-grid">
                <div class="about-value-card">
                    <div class="about-value-icon">💎</div>
                    <h4>Quality First</h4>
                    <p>Direct sourcing of premium components like Havells switchgear and structural steel.</p>
                </div>
                <div class="about-value-card">
                    <div class="about-value-icon">🤝</div>
                    <h4>Integrity</h4>
                    <p>Transparency in pricing, material testing certifications, and weight integrity.</p>
                </div>
                <div class="about-value-card">
                    <div class="about-value-icon">⚡</div>
                    <h4>Innovation</h4>
                    <p>Continuously optimizing distribution box sizing, layout efficiency, and path safety.</p>
                </div>
                <div class="about-value-card">
                    <div class="about-value-icon">🌱</div>
                    <h4>Sustainability</h4>
                    <p>Powering eco-friendly energy structures with sustainable, low-impact operations.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>
