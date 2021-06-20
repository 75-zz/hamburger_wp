<?php get_header(); ?>
                <div class="l-hero-single p-page-hero">
                <?php echo "<h1 class='p-page__title'>". get_the_title() . "</h1>"; ?>

                </div>
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<div class="p-single-wrapper">

<?php the_content(); ?>

                </div>
                <?php endwhile; ?>
<?php endif; ?>

</main>
<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>