<?php the_post(); ?>
<div id="main">
    <div class="box">
        <?php //the_breadcrumb()
        ?>
        <?php if (function_exists('bcn_display')) : ?>
            <section class="breadcumb">
                <?php bcn_display(); ?>
            </section>
        <?php endif; ?>
    </div>
    <div class="single box">

        <div class="auth-date-single">
            <span>
                نویسنده: <?php the_author() ?>
            </span>
            <span>
                <?php the_time("H:g:s | Y/m/d") ?>
            </span>
        </div>

        <div class="center">
            <?php
            if (has_post_thumbnail()) :
                the_post_thumbnail();
            else : ?>
                <img src="images/no-thumbnail.jpg" />
            <?php endif; ?>
        </div>

        <h3>
            <?php the_title(); ?>
        </h3>
        <?php the_content(); ?>

        <?php if (get_the_author_description()) : ?>
            <hr>
            <p>درباره نويسنده (<?php the_author() ?>):</p>
        <?php the_author_description();
        endif; ?>


    </div>
    <?php
    if (comments_open()) {
        comments_template();
    }
    ?>
</div>