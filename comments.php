<?php if (post_password_required()) {
    return;
}

echo "comments.php:";
?>
<section id="commentsParent">

    <div id="comments" class="comments-area">

        <?php if (have_comments()) : ?>
            <h3 class="comments-title uppercase">
                <?php

                comments_number();
                echo " برای \"";
                the_title();
                echo "\": ";
                ?>
            </h3>

            <ol class="comment-list">
                <?php
                wp_list_comments();
                ?>
            </ol>


            <?php
            // pagination for comments:
            if (get_comment_pages_count() > 1 && get_option('page_comments')) : // Are there comments to navigate through? 
            ?>
                <!-- <nav id="comment-nav-below" class="navigation comment-navigation" role="navigation"> -->
                <!-- <h2 class="screen-reader-text"><?php // esc_html_e('Comment navigation', 'flatsome'); 
                                                    ?></h2> -->
                <div class="nav-links nex-prev-nav">
                    <div class="nav-previous"><?php previous_comments_link("کامنت های قدیمی تر"/*esc_html__('Older Comments', 'flatsome')*/); ?></div>
                    <div class=""><?php echo "مجموعه نظرات در <u>" . get_comment_pages_count() . "</u> صفحه"; ?></div>
                    <div class="nav-next"><?php next_comments_link("کامنت های جدیدتر"/*esc_html__('Newer Comments', 'flatsome')*/); ?></div>
                </div>
                <!-- </nav> -->
            <?php endif;  // Check for comment navigation. 
            ?>

        <?php endif; // Check for have_comments(). 
        ?>

        <?php

            // شزط پایین باطله چون "شزط ورود به این سند باز بودن کامنت ها" هستش:

            // If comments are closed and there are comments, let's leave a little note, shall we?
            /*
                if (!comments_open() && get_comments_number() && post_type_supports(get_post_type(), 'comments')) :
                ?>
                    <p class="no-comments">Comments are closed.</p>
                <?php endif; 
            */ ?>

        <?php comment_form(); ?>

    </div>
</section>