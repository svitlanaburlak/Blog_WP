<!doctype html>
<html <?php language_attributes() ?>>

<head>
    <!-- Required meta tags -->
    <meta charset="<?php bloginfo('charset') ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- SEO -->
    <meta name="description" content="<?php bloginfo('description') ?>">
    <link rel="canonical" href="<?= get_permalink() ?>">
    <!-- Déclaration de notre font -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,800" rel="stylesheet">

    <!-- -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp"
      crossorigin="anonymous">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= get_theme_file_uri('assets/style.css') ?>">
    <title>Blog in WordPress</title>
    <?php
        wp_head();
    ?>
</head>

<body>

    <!-- HEADER -->
    <header>
        <!-- NAV -->
        <nav class="navbar navbar-expand-md navbar-light">
            <a class="navbar-brand" href="<?php echo get_home_url() ?>">Blog</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                Menu<span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <?php
                    wp_nav_menu([
                      'theme_location' => 'navbar-top' // menu slug name (id)
                    ]);
                ?>
            </div>
        </nav>
        <section class="text-center">
            <?php if ( is_category() ) : ?>
                <h1><?= single_cat_title();
                // doesnt show the title of category is there is not artciles
                // get_the_category()[0]->name;
                ?></h1>
                <p>Blog</p>
            <?php else : ?>
                <h1>Blog</h1>
                <hr />
            <p>
                Un blog WordPress
            </p>
            <?php endif ; ?>         
        </section>
  </header>