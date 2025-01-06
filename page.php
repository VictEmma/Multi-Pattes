<?php get_header(); ?>
    <div>
        <section>
            <h1><?php the_title(); ?></h1>
            <?php the_content(); ?>
            <script>
                console.log('Hello world');
            </script>
        </section>
    </div>
    <?php get_footer(); ?>