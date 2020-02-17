<!-- github.com/bradtraversy/bizlight_theme -->
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <title>eReczek</title>


    <!-- Bootstrap core CSS -->
    <link href="<?php bloginfo('template_url') ?>/bootstrap/css/bootstrap.css" rel="stylesheet" />
    <link href="<?php bloginfo('template_url') ?>/owl/dist/assets/owl.carousel.min.css" rel="stylesheet" />
    <link href="<?php bloginfo('template_url') ?>/owl/dist/assets/owl.theme.default.min.css" rel="stylesheet" />
    <link href="<?php bloginfo('template_url') ?>/fontawesome/css/all.css" rel="stylesheet" />
    <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet" />
</head>

<body>
    <?php include(get_template_directory() . "/partials/nav.php"); ?>
    <main role="main" class="w-100">
        <?php include(get_template_directory() . "/partials/showcase.php"); ?>
        <?php include(get_template_directory() . "/partials/offer.php"); ?>
        <?php include(get_template_directory() . "/partials/proloque.php"); ?>
        <?php include(get_template_directory() . "/partials/about.php"); ?>
        <?php include(get_template_directory() . "/partials/contact.php"); ?>
        <?php include(get_template_directory() . "/partials/footer.php"); ?>

    </main><!-- /.container -->
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/owl/dist/owl.carousel.min.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/main.js"></script>
</body>

</html>