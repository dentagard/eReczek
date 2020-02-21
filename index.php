<!-- github.com/bradtraversy/bizlight_theme -->
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <title>eReczek</title>


    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">    <link href="<?php bloginfo('template_url') ?>/owl/dist/assets/owl.carousel.min.css" rel="stylesheet" />
    <link href="<?php bloginfo('template_url') ?>/owl/dist/assets/owl.theme.default.min.css" rel="stylesheet" />
    <link href="<?php bloginfo('template_url') ?>/fontawesome/css/all.css" rel="stylesheet" />
    <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet" />

    <?php wp_head() ?>
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
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/main.js"></script>
</body>

</html>