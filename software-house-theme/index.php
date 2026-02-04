<?php
get_header();
?>
<main class="section">
    <div class="container">
        <h1>Latest Updates</h1>
        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
                <article class="card">
                    <h2><?php the_title(); ?></h2>
                    <?php the_excerpt(); ?>
                </article>
            <?php endwhile; ?>
        <?php else : ?>
            <p>No posts found.</p>
        <?php endif; ?>
    </div>
</main>
<?php
get_footer();
