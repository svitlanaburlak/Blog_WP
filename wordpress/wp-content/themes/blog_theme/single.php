<?php
    get_header();
?>
<div class="container">
    <div class="row">
        <main class="col-lg-12">

        <?php if( is_404() ) : ?>
          <h1>Oops, 404</h1>
          <article><p class='content'>Sorry, this page doesn't exist</p></article>
        <?php else : 
        
        if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <article class="card">
                <div class="card-body">
                    <h2 class="card-title"><a href="<?= get_permalink() ?>"><?= get_the_title() ?></a></h2>
                    <p class="card-text"><?= the_content() ?></p>
                    <p class="infos">
                      Posted by <a href="<?= get_author_posts_url(get_the_author_meta('ID')) ?>" class="card-link"><?= get_the_author() ?></a> <time><?= get_the_date() ?></time> in <a href="<?= get_category_link(get_the_category()[0]) ?>" class="card-link">
                        #
                        <?php 
                          $categoryObject = get_the_category();
                          echo $categoryObject[0]->name;
                        ?>
                      </a>
                    </p>
                </div>
              </article>
          <?php endwhile; endif; 
        endif; ?> 
        </main>
    </div><!-- /.row -->
<?php
    get_footer();
?>