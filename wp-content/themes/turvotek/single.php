<?php get_header(); ?>

<div class="container section" style="padding-top: 60px;">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); 
        // Calculate reading time
        $content = get_post_field( 'post_content', get_the_ID() );
        $word_count = str_word_count( strip_tags( $content ) );
        $reading_time = ceil( $word_count / 200 );
        if ($reading_time <= 0) $reading_time = 1;

        $categories = get_the_category();
        ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?> style="max-width: 800px; margin: 0 auto;">
            
            <!-- Breadcrumbs / Back button -->
            <div style="margin-bottom: 30px;">
                <a href="<?php echo esc_url( get_permalink( get_option( 'page_for_posts' ) ) ); ?>" class="back-link" style="display: inline-flex; align-items: center; gap: 8px; font-size: 14px; font-weight: 600; color: var(--graphite); transition: color 0.2s;">
                    <span style="font-size: 16px;">«</span> Back to Blogs
                </a>
            </div>

            <!-- Post Header -->
            <header style="margin-bottom: 40px; padding-bottom: 25px; border-bottom: 1px solid var(--hairline);">
                <!-- Category Badge -->
                <?php if ( ! empty( $categories ) ) : ?>
                    <span style="font-size: 11px; font-weight: 700; text-transform: uppercase; color: var(--primary); letter-spacing: 1.5px; display: inline-block; margin-bottom: var(--spacing-sm);">
                        <?php echo esc_html( $categories[0]->name ); ?>
                    </span>
                <?php endif; ?>

                <!-- Main Post Title -->
                <h1 style="font-size: 42px; line-height: 1.25; font-weight: 700; color: var(--ink-deep); margin: 0 0 16px 0; letter-spacing: -0.5px;">
                    <?php the_title(); ?>
                </h1>

                <!-- Meta Row -->
                <div style="display: flex; align-items: center; gap: 16px; flex-wrap: wrap; font-size: 14px; color: var(--graphite);">
                    <span style="display: inline-flex; align-items: center; gap: 6px;">
                        👤 <?php echo esc_html( get_the_author() ); ?>
                    </span>
                    <span>&bull;</span>
                    <span style="display: inline-flex; align-items: center; gap: 6px;">
                        📅 <?php echo get_the_date('F d, Y'); ?>
                    </span>
                    <span>&bull;</span>
                    <span style="display: inline-flex; align-items: center; gap: 6px;">
                        ⏱️ <?php echo $reading_time; ?> min read
                    </span>
                </div>
            </header>

            <!-- Featured Image -->
            <?php if ( has_post_thumbnail() ) : ?>
                <div class="post-featured-image-wrapper" style="margin-bottom: 40px; border-radius: var(--rounded-xl); overflow: hidden; border: 1px solid var(--hairline);">
                    <?php the_post_thumbnail('large', array('style' => 'width: 100%; height: auto; max-height: 450px; object-fit: cover; display: block;')); ?>
                </div>
            <?php endif; ?>

            <!-- Post Content -->
            <div class="post-content-entry" style="font-size: 17px; line-height: 1.8; color: var(--ink-soft);">
                <?php the_content(); ?>
            </div>

            <!-- Footer Meta & Navigation -->
            <footer style="margin-top: 60px; padding-top: 30px; border-top: 1px solid var(--hairline); display: flex; align-items: center; justify-content: space-between; flex-wrap: wrap; gap: 20px;">
                <div style="font-size: 14px; color: var(--graphite);">
                    <?php the_tags( '<span style="font-weight: 600;">Tags:</span> ', ', ', '' ); ?>
                </div>
                
                <div>
                    <a href="<?php echo esc_url( get_permalink( get_option( 'page_for_posts' ) ) ); ?>" class="btn btn-outline" style="height: 38px; padding: 0 16px;">
                        View All Articles
                    </a>
                </div>
            </footer>

        </article>

        <style>
            .post-content-entry p {
                margin-bottom: 24px;
            }
            .post-content-entry h2 {
                font-size: 26px;
                font-weight: 600;
                margin-top: 40px;
                margin-bottom: 16px;
                color: var(--ink-deep);
            }
            .post-content-entry h3 {
                font-size: 21px;
                font-weight: 600;
                margin-top: 30px;
                margin-bottom: 12px;
                color: var(--ink-deep);
            }
            .post-content-entry ul, .post-content-entry ol {
                margin-bottom: 24px;
                padding-left: 24px;
            }
            .post-content-entry li {
                margin-bottom: 8px;
            }
            .post-content-entry blockquote {
                border-left: 4px solid var(--primary);
                padding-left: 20px;
                font-style: italic;
                color: var(--graphite);
                margin: 30px 0;
                background-color: var(--cloud);
                padding-top: 12px;
                padding-bottom: 12px;
                border-radius: 0 var(--rounded-lg) var(--rounded-lg) 0;
            }
            .back-link:hover {
                color: var(--primary) !important;
            }
        </style>
    <?php endwhile; endif; ?>
</div>

<?php get_footer(); ?>
