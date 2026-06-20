<?php
/**
 * Template Name: Founders Page
 */
get_header(); ?>

<div class="container section">
    <!-- Header banner -->
    <div class="page-banner">
        <div class="page-banner-overlay"></div>
        <div class="page-banner-content">
            <h1 class="page-title">Our Founders</h1>
            <p class="shop-subtitle">
                <span class="shop-slogan-label">Our Leadership:</span>
                <span class="shop-rotating-mission rotating-text" data-images='[]' data-words='["Vijay Kumar Mittal & Rakesh Jangalwa", "Decades of combined engineering & financing experience", "Committed to a sustainable, clean energy future", "Building trust and technical excellence in solar"]'>Committed to a sustainable, clean energy future</span>
            </p>
        </div>
    </div>

    <!-- Profiles -->
    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 40px; margin-bottom: 60px;">
        <!-- Vijay Kumar Mittal -->
        <div class="card" style="display: flex; flex-direction: column; justify-content: space-between;">
            <div>
                <div style="width: 100px; height: 100px; border-radius: var(--rounded-full); overflow: hidden; margin-bottom: var(--spacing-md); border: 3px solid var(--primary-soft); box-shadow: var(--shadow-sm); display: flex; align-items: center; justify-content: center; background-color: var(--cloud);">
                    <img src="<?php echo esc_url( home_url( '/assetspictures/vijay-kumar-mittal.png' ) ); ?>" alt="Mr. Vijay Kumar Mittal" style="width: 100%; height: 100%; object-fit: cover;">
                </div>
                <h2 style="font-size: 24px; margin-bottom: 5px;">Mr. Vijay Kumar Mittal</h2>
                <div style="font-size: 14px; font-weight: 600; color: var(--primary); margin-bottom: var(--spacing-md); text-transform: uppercase; letter-spacing: 0.5px;">Promoter Director & Production Head</div>
                <p style="font-size: 15px; line-height: 1.6; color: var(--ink-soft);">
                    Mr. Vijay Kumar Mittal is the key driver overseeing operations and production. With a rich 15 years of experience working as a senior manager in various manufacturing domains, including his role as General Manager with M/s Mittal Plastomet Limited (Mittal Solar), a Rs. 100 crore enterprise, he heads technical production and product customization at Turvotek.
                </p>
            </div>
            <div style="border-top: 1px solid var(--hairline); padding-top: var(--spacing-md); margin-top: var(--spacing-md); font-size: 13px; color: var(--graphite);">
                Focus: Manufacturing, Custom Designs, OEM Relations
            </div>
        </div>
        
        <!-- Rakesh Jangalwa -->
        <div class="card" style="display: flex; flex-direction: column; justify-content: space-between;">
            <div>
                <div style="width: 100px; height: 100px; border-radius: var(--rounded-full); overflow: hidden; margin-bottom: var(--spacing-md); border: 3px solid var(--primary-soft); box-shadow: var(--shadow-sm); display: flex; align-items: center; justify-content: center; background-color: var(--cloud);">
                    <img src="<?php echo esc_url( home_url( '/assetspictures/Rakesh Jangalwa.jpg' ) ); ?>" alt="Mr. Rakesh Jangalwa" style="width: 100%; height: 100%; object-fit: cover;">
                </div>
                <h2 style="font-size: 24px; margin-bottom: 5px;">Mr. Rakesh Jangalwa</h2>
                <div style="font-size: 14px; font-weight: 600; color: var(--primary); margin-bottom: var(--spacing-md); text-transform: uppercase; letter-spacing: 0.5px;">Director & Financial Consultant</div>
                <p style="font-size: 15px; line-height: 1.6; color: var(--ink-soft);">
                    Mr. Rakesh Jangalwa is a commerce graduate with over 35 years of experience in project consultancy, corporate finance, and business development. He is the founder of CAS Management Pvt Ltd, a pioneering firm in project financing since 2003. He has managed business assignments globally across Malaysia, China, UAE, USA, and the UK.
                </p>
            </div>
            <div style="border-top: 1px solid var(--hairline); padding-top: var(--spacing-md); margin-top: var(--spacing-md); font-size: 13px; color: var(--graphite);">
                Focus: Project Financing, Strategic Partnerships, Compliance
            </div>
        </div>
    </div>

    <!-- Message from Founders (White-paper layout with quotes) -->
    <div style="background-color: var(--cloud); border-radius: var(--rounded-xl); padding: 50px; border: 1px solid var(--hairline);">
        <h2 style="font-size: 28px; text-align: center; margin-bottom: 30px;">Message from our Leadership</h2>
        <div style="font-size: 16px; line-height: 1.8; color: var(--ink-soft); max-width: 900px; margin: 0 auto;">
            <p style="margin-bottom: var(--spacing-md);">
                "At Turvotek, we believe that renewable energy is not merely an alternative source of power, but the foundation of a sustainable future. As India accelerates its transition towards clean energy, we are committed to supporting this transformation through reliable, innovative, and high-quality solar power solutions."
            </p>
            <p style="margin-bottom: var(--spacing-md);">
                "Our vision is to create a company that stands for trust, technical excellence, and customer satisfaction. With decades of combined experience in manufacturing, project management, finance, and business development, we have built Turvotek Green Energy to address the growing demand for dependable solar components and system solutions."
            </p>
            <p style="margin-bottom: var(--spacing-md);">
                "From AC Distribution Boxes (ACDB) and DC Distribution Boxes (DCDB) to solar structures, inverters, cables, and complete Balance of System (BoS) solutions, every product we offer is backed by our commitment to quality, performance, and value. We continuously strive to deliver products that meet the highest standards of safety, reliability, and efficiency."
            </p>
            <p style="margin-bottom: 0; font-style: italic; color: var(--graphite); border-top: 1px solid var(--hairline-strong); padding-top: var(--spacing-md); margin-top: var(--spacing-lg); text-align: right;">
                — Vijay Kumar Mittal & Rakesh Jangalwa
            </p>
        </div>
    </div>
</div>

<?php get_footer(); ?>
