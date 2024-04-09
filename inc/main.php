<?php
// print_r(wp_upload_dir()['baseurl']); ==  //http://localhost/myTemplateWP/wp-content/uploads/
?>

<div id="main">
    <!-- L_main  -->
    <div class="box">
        <div id="m_sub">آخرین دوره های آموزشی</div>
        <div class="postParent">
            <!-- post 1 -->
            <?php if (have_posts()) :
                while (have_posts()) : the_post();
            ?>
                    <div class="post">
                        <?php //echo " نویسنده: "; the_author() 
                        ?>
                        <a href="<?php the_permalink() ?>">

                            <?php // تصویر شاخصش:
                            if (has_post_thumbnail()) :
                                the_post_thumbnail();
                            ?>
                            <?php else : ?>
                                <img src="images/no-thumbnail.jpg" />
                            <?php endif ?>

                            <h3><?php the_title() ?></h3>
                        </a>
                        <p><?php the_excerpt() ?></p>

                        <div class="postFooter">
                            <hr />

                            <span class="itemFooterPost">00:08:00</span>
                            <span class="itemFooterPost">9 ثبت نام کننده</span>
                            <span class="itemFooterPost commentCounter"><?php comments_popup_link() ?></span>
                            <a href="<?php the_permalink() ?>" class="itemFooterPost">مشاهده</a>

                        </div>
                    </div>
                <?php
                endwhile;

            // This for Search mode(no resoult):
            elseif (isset($_GET['s']) && $_GET['s'] != '') :
                ?>
                <p class="empty">
                    نتيجه اي يافت نشد.
                </p>
            <?php
            endif;
            ?>

            <!-- 
                <div class="post">
                    <a href="#">
                        <img src="images/phpmysql.jpg" />
                        <h3>آموزش برنامه نویسی با PHP و MySQL</h3>
                        <div class="postFooter">
                            <hr />
                            <span class="f p1">99:99:99</span>
                            <span class="f p2">9 ثبت نام کننده</span>
                        </div>

                    </a>
                </div>
            -->
        </div>

        <?php  //pagination
        the_posts_pagination(array(
            'prev_text' => __('Previous page'),
            'next_text' => __('Next page'),
            'before_page_number' =>  __('')
        ));
        ?>

    </div>

    <div class="box">
        <div id="m_sub">پر طرفدارترین دوره های آموزشی</div>
        <div class="postParent">
            <?php //echo popularID(); 
            if (popularID()) : // <-- from functions.php
                // print_r(popularID());
                foreach (popularID() as $key => $val) :
                    $pop_posts = get_post($val);

                    // image:
                    $image = chickImage($pop_posts->ID); // <-- from functions.php

                    // echo "<pre>";print_r($pop_posts);echo "</pre>";
                    // echo $pop_posts->post_title;

                    // start popular Posts:
            ?>
                    <div class="post">
                        <?php //echo " نویسنده: "; the_author() 
                        ?>
                        <a href="<?php echo $pop_posts->guid ?>">

                            <?php // تصویر شاخصش:
                            if ($image[0]) : ?>
                                <img src="<?php echo wp_upload_dir()['baseurl'] . "/" . $image[0]; ?>" />

                            <?php else : ?>
                                <img src="images/no-thumbnail.jpg" />
                            <?php endif ?>

                            <h3><?php echo $pop_posts->post_title; ?></h3>
                        </a>
                        <p><?php echo $pop_posts->post_excerpt ?></p>

                        <div class="postFooter">
                            <hr />

                            <span class="itemFooterPost">00:08:00</span>
                            <span class="itemFooterPost">9 ثبت نام کننده</span>
                            <span class="itemFooterPost commentCounter"><?php echo $pop_posts->comment_count . " دیدگاه" ?></span>
                            <a href="<?php echo $pop_posts->guid ?>" class="itemFooterPost">مشاهده</a>

                        </div>
                    </div>

                <?php endforeach;
            else :
                ?>
                <p>دوره محبوبی برای نمایش وجود ندارد.</p>
            <?php
            endif;
            ?>

            <!-- post
            <div class="post">
                <a href="#">
                    <img src="images/htmlcss.jpg" />
                    <h3>آموزش طراحی صفحات وب با HTML5 و CSS3</h3>
                    <div class="postFooter">
                        <hr />
                        <span class="f p1">99:99:99</span>
                        <span class="f p2">9 ثبت نام کننده</span>
                    </div>
                </a>
            </div>
              -->

        </div>
    </div>
    <br /><br />
</div>