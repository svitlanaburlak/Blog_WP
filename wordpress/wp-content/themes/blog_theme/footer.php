<?php
    wp_footer();
?>

<footer>
    <div class="row justify-content-center text-center">
        <div class="col-6 social-networks">
            <ul class="list-inline">
                <li class="list-inline-item"><a href="#"><i class="fab fa-twitter-square"></i></a></li>
                <li class="list-inline-item"><a href="#"><i class="fab fa-facebook-square"></i></a></li>
                <li class="list-inline-item"><a href="#"><i class="fab fa-github-square"></i></a></li>
            </ul>
        </div>
    </div>

    <div class="row justify-content-center text-center">
        <div class="col-9 links">
            <?php
                wp_nav_menu([
                  'theme_location' => 'navbar-down'
                ]);
            ?>
          <!-- <ul class="list-inline">
            <li class="list-inline-item"><a href="contact.html">Nous contacter</a></li>
            <li class="list-inline-item"><a href="qui-sommes-nous.html">Qui sommes nous ?</a></li>
            <li class="list-inline-item"><a href="mentions-legales.html">Mentions légales</a></li> -->
          <!-- </ul> -->
        </div>
    </div>
</footer>

  </div> <!-- /.container -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T"
    crossorigin="anonymous"></script>
</body>

</html>