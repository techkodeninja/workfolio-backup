<section id="content" class="site-content">
    <div id="global-layout" class="right-sidebar">
        <main id="main" class="content-area">
            <?php if ( have_posts() ) : ?>
                <?php while( have_posts() ) : the_post(); ?>
                    <?php Backdrop\View\display( 'entry' ); ?>
                <?php endwhile; ?>
                <?php Backdrop\View\display( 'nav/pagination', 'posts' ); ?>
            <?php endif; ?>
        </main>
        <?php Backdrop\View\display( 'sidebar', 'primary', [ 'location' => 'primary' ] ); ?>
    </div>
</section>