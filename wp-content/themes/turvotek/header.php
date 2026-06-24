<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<script>(function(){var t=localStorage.getItem('turvotek-theme');if(t){document.documentElement.setAttribute('data-theme',t);}else{document.documentElement.setAttribute('data-theme','dark');}})();</script>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="<?php echo esc_url( home_url( '/assetspictures/logo.jpeg' ) ); ?>" type="image/jpeg">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>



<!-- Main Top Navbar -->
<header class="top-navbar">
    <div class="logo">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
            <img src="<?php echo esc_url( home_url( '/assetspictures/logo-removebg-preview.png' ) ); ?>" class="logo-light" alt="Turvotek">
            <img src="<?php echo esc_url( home_url( '/assetspictures/logo-white.png' ) ); ?>" class="logo-dark" alt="Turvotek">
        </a>
    </div>
    
    <nav>
        <?php
        wp_nav_menu( array(
            'theme_location' => 'primary',
            'container'      => false,
            'menu_class'     => 'nav-links',
            'fallback_cb'    => 'turvotek_fallback_menu',
        ) );
        
        function turvotek_fallback_menu() {
            echo '<ul class="nav-links">';
            echo '<li><a href="' . esc_url( home_url( '/' ) ) . '">Home</a></li>';
            echo '<li><a href="' . esc_url( get_post_type_archive_link( 'product' ) ) . '">Catalog</a></li>';
            echo '<li><a href="' . esc_url( home_url( '/about' ) ) . '">About Us</a></li>';
            echo '<li><a href="' . esc_url( home_url( '/founders' ) ) . '">Founders</a></li>';
            echo '<li><a href="' . esc_url( home_url( '/blogs' ) ) . '">Blogs</a></li>';
            echo '<li><a href="' . esc_url( home_url( '/contact' ) ) . '">Contact</a></li>';
            echo '</ul>';
        }
        ?>

    </nav>

    <!-- Live Product Search Bar -->
    <div class="header-search" id="header-search">
        <div class="header-search-wrap">
            <span class="header-search-icon">
                <svg viewBox="0 0 24 24" aria-hidden="true">
                    <circle cx="11" cy="11" r="7"/>
                    <line x1="16.5" y1="16.5" x2="22" y2="22"/>
                </svg>
            </span>
            <input
                type="text"
                id="header-search-input"
                class="header-search-input"
                placeholder="Search products…"
                autocomplete="off"
                aria-label="Search products"
                aria-autocomplete="list"
                aria-controls="header-search-dropdown"
            />
            <button class="header-search-clear" id="header-search-clear" aria-label="Clear search" style="display:none">✕</button>
        </div>
        <div class="header-search-dropdown" id="header-search-dropdown" role="listbox"></div>
    </div>

    <div class="nav-actions">
        <!-- Dark Mode Toggle -->
        <button class="theme-toggle-btn" id="themeToggleBtn" aria-label="Toggle dark mode">
            <svg class="sun-icon" viewBox="0 0 24 24" width="18" height="18" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <circle cx="12" cy="12" r="5"/><line x1="12" y1="1" x2="12" y2="3"/><line x1="12" y1="21" x2="12" y2="23"/><line x1="4.22" y1="4.22" x2="5.64" y2="5.64"/><line x1="18.36" y1="18.36" x2="19.78" y2="19.78"/><line x1="1" y1="12" x2="3" y2="12"/><line x1="21" y1="12" x2="23" y2="12"/><line x1="4.22" y1="19.78" x2="5.64" y2="18.36"/><line x1="18.36" y1="5.64" x2="19.78" y2="4.22"/>
            </svg>
            <svg class="moon-icon" viewBox="0 0 24 24" width="18" height="18" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="display:none">
                <path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"/>
            </svg>
        </button>

        <?php if ( class_exists( 'WooCommerce' ) ) : ?>
            <a href="<?php echo esc_url( wc_get_cart_url() ); ?>" class="header-cart-btn" aria-label="View shopping cart">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-cart">
                    <circle cx="9" cy="21" r="1"></circle>
                    <circle cx="20" cy="21" r="1"></circle>
                    <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path>
                </svg>
                <span class="header-cart-count"><?php echo esc_html( WC()->cart->get_cart_contents_count() ); ?></span>
            </a>
        <?php endif; ?>
        
        <!-- Mobile menu toggle button -->
        <button class="mobile-menu-toggle" aria-label="Toggle navigation menu">
            <span></span>
            <span></span>
            <span></span>
        </button>
    </div>
</header>

<!-- Overlay for the side menu on mobile -->
<div class="nav-overlay" id="nav-overlay"></div>

<!-- Side Mini Cart Drawer -->
<div class="side-mini-cart" id="side-mini-cart">
    <div class="side-cart-header">
        <h3>Shopping Cart</h3>
        <button class="close-mini-cart" id="close-mini-cart" aria-label="Close cart">&times;</button>
    </div>
    <div class="side-cart-body">
        <div class="widget_shopping_cart_content">
            <?php if ( class_exists( 'WooCommerce' ) ) {
                woocommerce_mini_cart();
            } ?>
        </div>
    </div>
    <div class="side-cart-footer">
        <button class="btn btn-outline continue-shopping-btn" id="continue-shopping-btn">Continue Shopping</button>
    </div>
</div>
<div class="cart-overlay" id="cart-overlay"></div>

<script>
/* Inline search config — nonce generated server-side */
var turvotek_search_cfg = {
    ajax_url: '<?php echo esc_url( admin_url( 'admin-ajax.php' ) ); ?>',
    nonce:    '<?php echo esc_js( wp_create_nonce( 'turvotek_live_search_nonce' ) ); ?>'
};

document.addEventListener('DOMContentLoaded', function() {
    const header = document.querySelector('.top-navbar');
    const toggle = document.querySelector('.mobile-menu-toggle');
    const overlay = document.getElementById('nav-overlay');
    const body = document.body;

    if (toggle && header) {
        toggle.addEventListener('click', function() {
            header.classList.toggle('menu-open');
            body.classList.toggle('menu-open-body');
        });
    }

    if (overlay) {
        overlay.addEventListener('click', function() {
            header.classList.remove('menu-open');
            body.classList.remove('menu-open-body');
        });
    }

    const navLinks = document.querySelectorAll('.nav-links a');
    navLinks.forEach(link => {
        link.addEventListener('click', function() {
            header.classList.remove('menu-open');
            body.classList.remove('menu-open-body');
        });
    });

    // Side Mini Cart logic
    const miniCart = document.getElementById('side-mini-cart');
    const cartOverlay = document.getElementById('cart-overlay');
    const closeCartBtn = document.getElementById('close-mini-cart');

    function openMiniCart() {
        if (miniCart && cartOverlay) {
            miniCart.classList.add('open');
            cartOverlay.classList.add('open');
            body.classList.add('cart-open-body');
        }
    }

    function closeMiniCart() {
        if (miniCart && cartOverlay) {
            miniCart.classList.remove('open');
            cartOverlay.classList.remove('open');
            body.classList.remove('cart-open-body');
        }
    }

    // Intercept clicks on cart button to open the side drawer instead
    document.addEventListener('click', function(e) {
        const cartBtn = e.target.closest('.cart-btn');
        if (cartBtn) {
            e.preventDefault();
            openMiniCart();
        }
    });

    if (closeCartBtn) {
        closeCartBtn.addEventListener('click', closeMiniCart);
    }
    const continueShoppingBtn = document.getElementById('continue-shopping-btn');
    if (continueShoppingBtn) {
        continueShoppingBtn.addEventListener('click', closeMiniCart);
    }
    if (cartOverlay) {
        cartOverlay.addEventListener('click', closeMiniCart);
    }

    // WooCommerce AJAX integration
    if (typeof jQuery !== 'undefined') {
        jQuery(document.body).on('added_to_cart', function() {
            openMiniCart();
        });
    }

    // ── Live Product Search ──────────────────────────────────────────────
    const searchInput    = document.getElementById('header-search-input');
    const searchDropdown = document.getElementById('header-search-dropdown');
    const searchClear    = document.getElementById('header-search-clear');
    let searchTimer      = null;
    let activeIndex      = -1;

    function getItems() {
        return searchDropdown ? searchDropdown.querySelectorAll('.hs-item') : [];
    }

    function setActive(idx) {
        const items = getItems();
        items.forEach((el, i) => el.classList.toggle('hs-item--active', i === idx));
        activeIndex = idx;
    }

    function renderDropdown(results) {
        if (!searchDropdown) return;
        if (!results || results.length === 0) {
            searchDropdown.innerHTML = '<div class="hs-empty">No products found</div>';
            searchDropdown.classList.add('hs-open');
            return;
        }
        const html = results.map((p, i) => `
            <a href="${p.url}" class="hs-item" role="option" tabindex="-1" data-index="${i}">
                <img class="hs-thumb" src="${p.thumb}" alt="${p.title}">
                <span class="hs-info">
                    <span class="hs-title">${p.title}</span>
                    <span class="hs-price">${p.price}</span>
                </span>
            </a>`).join('');
        searchDropdown.innerHTML = html;
        searchDropdown.classList.add('hs-open');
        activeIndex = -1;
    }

    function closeDropdown() {
        if (searchDropdown) {
            searchDropdown.classList.remove('hs-open');
            searchDropdown.innerHTML = '';
        }
        activeIndex = -1;
    }

    function doSearch(term) {
        if (!turvotek_search_cfg) return;
        const url = turvotek_search_cfg.ajax_url
            + '?action=turvotek_live_search'
            + '&nonce=' + encodeURIComponent(turvotek_search_cfg.nonce)
            + '&q='     + encodeURIComponent(term);

        fetch(url)
            .then(r => r.json())
            .then(data => {
                if (data.success) renderDropdown(data.data);
            })
            .catch(() => closeDropdown());
    }

    if (searchInput) {
        searchInput.addEventListener('input', function() {
            const val = this.value.trim();
            searchClear && (searchClear.style.display = val ? 'flex' : 'none');
            clearTimeout(searchTimer);
            if (val.length < 2) { closeDropdown(); return; }
            searchTimer = setTimeout(() => doSearch(val), 300);
        });

        searchInput.addEventListener('keydown', function(e) {
            const items = getItems();
            if (e.key === 'ArrowDown') {
                e.preventDefault();
                setActive(Math.min(activeIndex + 1, items.length - 1));
            } else if (e.key === 'ArrowUp') {
                e.preventDefault();
                setActive(Math.max(activeIndex - 1, 0));
            } else if (e.key === 'Enter') {
                if (activeIndex >= 0 && items[activeIndex]) {
                    window.location.href = items[activeIndex].href;
                }
            } else if (e.key === 'Escape') {
                closeDropdown();
                searchInput.blur();
            }
        });
    }

    if (searchClear) {
        searchClear.addEventListener('click', function() {
            if (searchInput) { searchInput.value = ''; searchInput.focus(); }
            searchClear.style.display = 'none';
            closeDropdown();
        });
    }


    // Close dropdown when clicking outside
    document.addEventListener('click', function(e) {
        const searchWrap = document.getElementById('header-search');
        if (searchWrap && !searchWrap.contains(e.target)) closeDropdown();
        const mobileWrap = document.querySelector('.mobile-nav-search');
        if (mobileWrap && !mobileWrap.contains(e.target)) closeMobileDropdown();
    });

    // Mobile search (inside nav drawer)
    var mobileInput    = document.getElementById('mobile-search-input');
    var mobileDropdown = document.getElementById('mobile-search-dropdown');
    var mobileClear    = document.getElementById('mobile-search-clear');
    var mobileTimer    = null;

    function closeMobileDropdown() {
        if (mobileDropdown) { mobileDropdown.classList.remove('hs-open'); mobileDropdown.innerHTML = ''; }
    }

    if (mobileInput) {
        mobileInput.addEventListener('input', function() {
            var val = this.value.trim();
            if (mobileClear) mobileClear.style.display = val ? 'flex' : 'none';
            clearTimeout(mobileTimer);
            if (val.length < 2) { closeMobileDropdown(); return; }
            mobileTimer = setTimeout(function() {
                if (!turvotek_search_cfg) return;
                var url = turvotek_search_cfg.ajax_url + '?action=turvotek_live_search&nonce=' + encodeURIComponent(turvotek_search_cfg.nonce) + '&q=' + encodeURIComponent(val);
                fetch(url).then(function(r){return r.json();}).then(function(data){
                    if (!data.success || !mobileDropdown) return;
                    if (!data.data || data.data.length === 0) {
                        mobileDropdown.innerHTML = '<div class="hs-empty">No products found</div>';
                    } else {
                        mobileDropdown.innerHTML = data.data.map(function(p){ return '<a href="'+p.url+'" class="hs-item"><img class="hs-thumb" src="'+p.thumb+'" alt="'+p.title+'"><span class="hs-info"><span class="hs-title">'+p.title+'</span><span class="hs-price">'+p.price+'</span></span></a>'; }).join('');
                    }
                    mobileDropdown.classList.add('hs-open');
                }).catch(function(){ closeMobileDropdown(); });
            }, 300);
        });
        mobileInput.addEventListener('keydown', function(e){ if(e.key==='Escape'){ closeMobileDropdown(); mobileInput.blur(); } });
    }
    if (mobileClear) {
        mobileClear.addEventListener('click', function(){ if(mobileInput){mobileInput.value='';mobileInput.focus();} mobileClear.style.display='none'; closeMobileDropdown(); });
    }

    // ── Dark Mode Toggle ─────────────────────────────────────────────────
    var themeToggle = document.getElementById('themeToggleBtn');
    var htmlEl = document.documentElement;

    function setTheme(theme) {
        htmlEl.setAttribute('data-theme', theme);
        localStorage.setItem('turvotek-theme', theme);
        var sun = themeToggle && themeToggle.querySelector('.sun-icon');
        var moon = themeToggle && themeToggle.querySelector('.moon-icon');
        if (sun && moon) {
            sun.style.display = theme === 'dark' ? 'none' : 'block';
            moon.style.display = theme === 'dark' ? 'block' : 'none';
        }
    }

    function getPreferredTheme() {
        var saved = localStorage.getItem('turvotek-theme');
        if (saved) return saved;
        return 'dark';
    }

    setTheme(getPreferredTheme());

    if (themeToggle) {
        themeToggle.addEventListener('click', function() {
            var current = htmlEl.getAttribute('data-theme');
            setTheme(current === 'dark' ? 'light' : 'dark');
        });
    }

    // Listen for system preference changes
    window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', function(e) {
        if (!localStorage.getItem('turvotek-theme')) {
            setTheme('dark');
        }
    });
});

</script>
