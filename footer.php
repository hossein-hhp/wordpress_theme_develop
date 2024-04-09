<div id="footerParent">
    <div class="container" class="footer">
        <div id="map">
            <h4>نقشه سایت</h4>
            <?php wp_nav_menu(array("theme_location" => 'footer_menu')) ?>
            <!-- <ul>
                <li><a href="#">صفحه اصلی</a></li>
                <li><a href="#">همکاری با ما</a></li>
                <li><a href="#">تبلیغات</a></li>
                <li><a href="#">درباره ما</a></li>
                <li><a href="#">تماس با ما</a></li>
            </ul> -->
        </div>

        <?php if (function_exists('dynamic_sidebar'))
            dynamic_sidebar('footer_side');
        ?>
        <!-- 
            عضویت در خبرنامه
                <label>ایمیل خود را وارد کنید</label>
                <br />
                <input type="email" name="email" id="radius" placeholder="HHP" />
                <br />
                <input type="button" value="عضویت" id="radius" class="color" />
            </div>
        </div>
        -->
    </div>
</div>