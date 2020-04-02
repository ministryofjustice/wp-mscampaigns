<?php get_header(); ?>
    <main id="content">
        <article id="post-0" class="post not-found">
            <header class="header">
                <h1 class="entry-title"><?php esc_html_e('Not Found', 'campaign'); ?></h1>
            </header>
            <div class="entry-content">
                <p><?php esc_html_e('Nothing found for the requested page. Try a search instead?', 'campaign'); ?></p>
                <?php get_search_form(); ?>
            </div>
        </article>
    </main>
<?php get_sidebar(); ?>
<?php get_footer(); ?>