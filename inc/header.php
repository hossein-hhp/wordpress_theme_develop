<!-- header -->
<div id="header">
    <div class="container">
        <div id="search">
            <h1>مرجع آموزش آنلاین</h1>
            <h4>
                <?php bloginfo('description'); ?>
            </h4>
            <?php //get_search_form();
            ?>
            <form role="search" method="get" id="searchform" class="searchform" action="http://localhost/myTemplateWP/">
                <input type="search" name="s" id="radius" placeholder="دوره های مورد نیازت رو پیدا کن">
                <input type="submit" value="جستجو" id="radius" class="color" />
            </form>
        </div>

    <!-- 
        <form name="loginform" id="loginform" action="http://localhost/myTemplateWP/wp-login.php" method="post">
            <p>
                <label for="user_login">نام کاربری یا نشانی ایمیل</label>
                <input type="text" name="log" id="user_login" class="input" value="" size="20" autocapitalize="none" autocomplete="username">
            </p>

            <div class="user-pass-wrap">
                <label for="user_pass">رمز عبور</label>
                <div class="wp-pwd">
                    <input type="password" name="pwd" id="user_pass" class="input password-input" value="" size="20" autocomplete="current-password">
                    <button type="button" class="button button-secondary wp-hide-pw hide-if-no-js" data-toggle="0" aria-label="نمایش رمز">
                        <span class="dashicons dashicons-visibility" aria-hidden="true"></span>
                    </button>
                </div>
            </div>
            <p class="forgetmenot"><input name="rememberme" type="checkbox" id="rememberme" value="forever"> <label for="rememberme">مرا به خاطر بسپار</label></p>
            <p class="submit">
                <input type="submit" name="wp-submit" id="wp-submit" class="button button-primary button-large" value="ورود">
                                    <input type="hidden" name="redirect_to" value="http://localhost/myTemplateWP/wp-admin/">
                                    <input type="hidden" name="testcookie" value="1">
            </p>
        </form>
    -->


        <div id="set">
            <form name="loginform" id="loginform" action="http://localhost/myTemplateWP/wp-login.php" method="post">
                <fieldset>
                    <legend>وارد شوید</legend>
                    <table>
                        <tr>
                            <td> <label>نام کاربری</label></td>
                            <td> <input type="text" name="log" id="user_login" class="cen_s" placeholder="نام کاربری" />
                            </td>
                        </tr>
                        <tr>
                            <td> <label>کلمه عبور</label></td>
                            <td> <input type="password" name="pwd" id="user_pass" class="cen_s"
                                    placeholder="رمز عبور" /></td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <input type="checkbox" name="remember" /><label>مرا به خاطر بسپار</label>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2" class="logBtn">
                                <input type="submit" name="wp-submit" id="wp-submit" value="ورود"
                                    class="color radius" />
                                <a href="http://localhost/myTemplateWP/wp-login.php?action=register">
                                    <input type="button" value="ثبت نام" class="color radius" />
                                </a>
                            </td>
                        </tr>
                    </table>
                </fieldset>
            </form>
        </div>
    </div>
</div>