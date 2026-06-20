<?php get_header(); ?>

<div class="container section">
    <?php if ( have_posts() ) : ?>
        <?php while ( have_posts() ) : the_post(); ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <div class="page-banner">
                    <div class="page-banner-overlay"></div>
                    <div class="page-banner-content">
                        <h1 class="page-title"><?php the_title(); ?></h1>
                    </div>
                </div>
                
                <div class="entry-content" style="line-height: 1.8; font-size: 16px;">
                    <?php the_content(); ?>
                </div>
            </article>
        <?php endwhile; ?>
    <?php endif; ?>
</div>

<?php get_footer(); ?>
