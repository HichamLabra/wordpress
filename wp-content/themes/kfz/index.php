<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <article>
            <div>
                <?php if (has_post_thumbnail()) {
                    the_post_thumbnail();
                } ?>
            </div>

            <div>
                <h3>
                    <?php the_title(); ?>
                </h3>
                <div>
                    <?php the_author(); ?> | <?php the_date('j. F Y'); ?> |
                    <a href="<?php the_permalink(); ?>"><?php comments_number('0'); ?></a>
                </div>
                <div>
                    <p>
                        <?php the_excerpt(); ?>
                        <a href="<?php the_permalink(); ?>">Jetzt lesen!</a>
                    </p>
                </div>
            </div>
        </article>

<?php endwhile;
endif; ?>

<?php get_footer(); ?>