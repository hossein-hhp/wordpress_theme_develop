<?php get_header() ?>

<body <?php body_class() ?>>

    <?php include_once "inc/nav.php"; ?>
    <?php include_once "inc/header.php"; ?>

    <div class="container flex-reverse">

        <!-- R_list  -->
        <?php get_sidebar() ?>

        <!-- main -->
        <?php include_once "inc/main.php"; ?>

    </div>


    <?php get_footer() ?>

    <div class="hhp">Write by Hossein(HHP)</div>

</body>

</html>