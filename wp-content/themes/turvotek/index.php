<?php get_header(); ?>

<div class="container section">
    <!-- Header banner -->
    <header style="margin-bottom: 50px; text-align: center;">
        <div style="font-size: 12px; font-weight: 700; color: var(--primary); text-transform: uppercase; letter-spacing: 2px; margin-bottom: var(--spacing-xs);">Insights & News</div>
        <h1 style="font-size: 48px; margin-bottom: 0;">Blogs & Articles</h1>
        <div style="width: 60px; height: 4px; background-color: var(--primary); margin: var(--spacing-sm) auto 0 auto;"></div>
    </header>

    <?php if ( have_posts() ) : ?>
        <div style="display: grid; grid-template-columns: repeat(auto-fill, minmax(340px, 1fr)); gap: 30px; margin-bottom: 50px;">
            <?php while ( have_posts() ) : the_post(); 
                // Calculate dynamic reading time
                $content = get_post_field( 'post_content', get_the_ID() );
                $word_count = str_word_count( strip_tags( $content ) );
                $reading_time = ceil( $word_count / 200 ); // average reading speed of 200 wpm
                if ($reading_time <= 0) $reading_time = 1;

                $categories = get_the_category();
                $cat_name = ! empty( $categories ) ? $categories[0]->name : 'General';
                ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class('card'); ?> style="display: flex; flex-direction: column; height: 100%; padding: var(--spacing-md); border-radius: var(--rounded-xl); border: 1px solid var(--hairline); background-color: var(--paper); transition: transform 0.2s ease, box-shadow 0.2s ease;">
                    
                    <!-- Post Image / SVG Fallback -->
                    <div class="post-thumbnail-wrapper" style="overflow: hidden; border-radius: var(--rounded-lg); margin-bottom: var(--spacing-md);">
                        <?php if ( has_post_thumbnail() ) : ?>
                            <?php the_post_thumbnail('medium_large', array('style' => 'width: 100%; height: 180px; object-fit: cover; transition: transform 0.3s ease; display: block;')); ?>
                        <?php else : ?>
                            <!-- Styled SVG Fallback depending on category -->
                            <?php if ( strtolower($cat_name) === 'cabling' ) : ?>
                                <svg viewBox="0 0 100 60" style="width: 100%; height: 180px; background: linear-gradient(135deg, #0e3191 0%, #024ad8 100%); display: block;">
                                    <circle cx="50" cy="30" r="25" fill="rgba(255,255,255,0.05)" />
                                    <path d="M 20 20 Q 50 40 80 20" stroke="#ffd700" stroke-width="3" fill="none" stroke-linecap="round" />
                                    <path d="M 20 30 Q 50 50 80 30" stroke="#ffffff" stroke-width="3" fill="none" stroke-linecap="round" />
                                    <path d="M 20 40 Q 50 60 80 40" stroke="#ff5050" stroke-width="3" fill="none" stroke-linecap="round" />
                                    <path d="M 50 12 L 45 28 L 55 28 L 50 44" fill="#ffd700" stroke="#ffd700" stroke-width="1" stroke-linejoin="round"/>
                                </svg>
                            <?php elseif ( strtolower($cat_name) === 'policy' ) : ?>
                                <svg viewBox="0 0 100 60" style="width: 100%; height: 180px; background: linear-gradient(135deg, #0b132b 0%, #1c2541 100%); display: block;">
                                    <circle cx="50" cy="30" r="25" fill="rgba(255,255,255,0.05)" />
                                    <rect x="36" y="16" width="28" height="28" rx="2" fill="none" stroke="#296ef9" stroke-width="2" />
                                    <line x1="42" y1="22" x2="58" y2="22" stroke="#ffffff" stroke-width="2" stroke-linecap="round" />
                                    <line x1="42" y1="28" x2="54" y2="28" stroke="#ffffff" stroke-width="2" stroke-linecap="round" />
                                    <line x1="42" y1="34" x2="50" y2="34" stroke="#ffd700" stroke-width="2" stroke-linecap="round" />
                                </svg>
                            <?php elseif ( strtolower($cat_name) === 'safety' ) : ?>
                                <svg viewBox="0 0 100 60" style="width: 100%; height: 180px; background: linear-gradient(135deg, #0d5c3a 0%, #0f8f54 100%); display: block;">
                                    <circle cx="50" cy="30" r="25" fill="rgba(255,255,255,0.05)" />
                                    <line x1="40" y1="35" x2="60" y2="35" stroke="#ffffff" stroke-width="2.5" stroke-linecap="round" />
                                    <line x1="44" y1="41" x2="56" y2="41" stroke="#ffffff" stroke-width="2.5" stroke-linecap="round" />
                                    <line x1="48" y1="47" x2="52" y2="47" stroke="#ffffff" stroke-width="2.5" stroke-linecap="round" />
                                    <path d="M 50 12 L 50 26 M 50 26 L 46 21 M 50 26 L 54 21" stroke="#ffd700" stroke-width="2.5" stroke-linecap="round" />
                                </svg>
                            <?php else : ?>
                                <svg viewBox="0 0 100 60" style="width: 100%; height: 180px; background: linear-gradient(135deg, #3d3d3d 0%, #1a1a1a 100%); display: block;">
                                    <circle cx="50" cy="30" r="25" fill="rgba(255,255,255,0.05)" />
                                    <text x="50" y="34" fill="rgba(255,255,255,0.3)" font-size="7" font-weight="700" font-family="var(--font-display)" letter-spacing="1px" text-anchor="middle">TURVOTEK</text>
                                </svg>
                            <?php endif; ?>
                        <?php endif; ?>
                    </div>

                    <!-- Post Meta Category -->
                    <div>
                        <span style="font-size: 11px; font-weight: 700; text-transform: uppercase; color: var(--primary); letter-spacing: 1px; display: inline-block;">
                            <?php echo esc_html( $cat_name ); ?>
                        </span>
                    </div>

                    <!-- Post Title -->
                    <h3 style="font-size: 20px; font-weight: 600; line-height: 1.3; margin: 8px 0 12px 0;">
                        <a href="<?php the_permalink(); ?>" style="color: var(--ink-deep); transition: color 0.2s;">
                            <?php the_title(); ?>
                        </a>
                    </h3>

                    <!-- Excerpt -->
                    <p style="font-size: 14px; line-height: 1.6; color: var(--graphite); margin: 0 0 20px 0; display: -webkit-box; -webkit-line-clamp: 3; -webkit-box-orient: vertical; overflow: hidden; flex-grow: 1;">
                        <?php echo wp_trim_words( get_the_excerpt(), 22 ); ?>
                    </p>

                    <!-- Bottom Bar -->
                    <div style="margin-top: auto; padding-top: var(--spacing-sm); border-top: 1px solid var(--hairline); display: flex; align-items: center; justify-content: space-between;">
                        <span style="font-size: 13px; color: var(--graphite);">
                            <?php echo get_the_date('M d, Y'); ?> &bull; <?php echo $reading_time; ?> min read
                        </span>
                        <a href="<?php the_permalink(); ?>" style="font-size: 14px; font-weight: 700; color: var(--primary); display: inline-flex; align-items: center; gap: 4px; transition: gap 0.2s;">
                            Read Article <span class="chevron" style="font-size: 16px; line-height: 1;">»</span>
                        </a>
                    </div>
                </article>
            <?php endwhile; ?>
        </div>

        <!-- Pagination -->
        <div class="blog-pagination" style="margin-top: 50px; text-align: center;">
            <?php
            echo paginate_links( array(
                'prev_text' => '<span style="font-weight:700;">« Prev</span>',
                'next_text' => '<span style="font-weight:700;">Next »</span>',
                'type'      => 'plain',
            ) );
            ?>
        </div>
        
        <style>
            .blog-pagination a, .blog-pagination span {
                display: inline-block;
                padding: 10px 18px;
                margin: 0 4px;
                border-radius: var(--rounded-md);
                border: 1px solid var(--hairline);
                color: var(--ink);
                font-weight: 500;
                font-size: 14px;
                transition: all 0.2s;
            }
            .blog-pagination a:hover {
                background-color: var(--cloud);
                border-color: var(--hairline-strong);
                color: var(--primary);
            }
            .blog-pagination .current {
                background-color: var(--primary);
                border-color: var(--primary);
                color: #fff;
            }
            .card:hover .chevron {
                transform: translateX(3px);
            }
            .chevron {
                transition: transform 0.2s;
            }
        </style>

    <?php else : ?>
        <div style="text-align: center; padding: 80px 0;">
            <h2 style="font-size: 24px; color: var(--graphite);">No articles found in this category.</h2>
            <p style="margin-bottom: 30px; color: var(--steel);">Check back soon for latest technical articles and updates.</p>
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="btn btn-primary">Back to Home</a>
        </div>
    <?php endif; ?>
</div>

<?php get_footer(); ?>
