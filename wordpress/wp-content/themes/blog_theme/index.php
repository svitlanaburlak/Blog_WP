<?php
    get_header();
?>
    <div class="container">
        <div class="row">
            <main class="col-lg-9">

                <?php if( is_404() ) : ?>
                    <h1>Woops, 404</h1>
                    <article><p class='content'>Désolé, cette page n'existe pas</p></article>
                <?php else : ?>
                
                <?php if ( have_posts() ) {
                    while ( have_posts() ) {
                        the_post();
                    ?>
                      <article class="card">
                          <div class="card-body">
                              <h2 class="card-title"><a href="<?= get_permalink() ?>"><?= get_the_title() ?></a></h2>
                              <p class="card-text"><?= the_content() ?></p>
                              <p class="infos">
                                Posté par 
                                  <a href="<?= get_author_posts_url(get_the_author_meta('ID')) ?>" class="card-link"><?= get_the_author() ?></a> le <time><?= get_the_date() ?></time> dans <a href="<?= get_category_link(get_the_category()[0]) ?>" class="card-link">
                                    #
                                      <?php 
                                        // get_the_category() returns an array of category objects
                                        $categoryObject = get_the_category();
                                        echo $categoryObject[0]->name;
                                        // var_dump($categoryObject[0]);
                                      ?>
                                  </a>
                              </p>
                          </div>
                      </article>
                <?php
                  }
                } endif; ?>  

                <nav aria-label="Page navigation example" class="avec-bonus">
                    <ul class="pagination justify-content-between">
                        <li class="page-item"><a class="page-link" href="#"><i class="fas fa-arrow-left"></i> Previous</a></li>
                        <li class="page-item"><a class="page-link" href="#">Next <i class="fas fa-arrow-right"></i></a></li>
                    </ul>
                </nav>
            </main>
 
            <aside class="col-lg-3">
            <div class="avec-bonus input-group mb-3">
                <input type="text" class="form-control" placeholder="Rechercher un article..." aria-label="Rechercher un article..."
                  aria-describedby="basic-addon2">
                <div class="input-group-append">
                  <button class="btn btn-outline-secondary" type="button">Allez</button>
                </div>
            </div>

            <div class="card">
                <?php get_template_part('template-parts/sidebar', 'categories') ?>
            </div>
            <div class="card">
                <?php get_template_part('template-parts/sidebar', 'authors') ?>
            </div>
          </aside>
    </div><!-- /.row -->   
<?php
    get_footer();
?>