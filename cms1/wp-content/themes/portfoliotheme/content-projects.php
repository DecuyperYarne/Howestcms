<section id="one" class="wrapper style1">
    <div class="container 75%">
        <div class="row 200%">
            <div class="12u 12u$(medium)">
                <?php the_post_thumbnail(); ?>
                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <?php the_excerpt(); ?>
            </div>
        </div>
    </div>
</section>