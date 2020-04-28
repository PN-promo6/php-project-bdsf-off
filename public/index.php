<?php 

require("../vendor/autoload.php");

use Entity\itemCollection;
use Entity\user;

$user1 = new User();
$user1->id = 1;
$user1->nickname = "GrootBoy";
$user1->password = "xxxxxxxx";

$user2 = new User();
$user2->id = 2;
$user2->nickname = "Léa-iGirl";
$user2->password = "xxxxxxxx";



$post1 = new itemCollection();
$post1->id = 1;
$post1->namePop = "Negan";
$post1->reference = "573";
$post1->categorie = "TELEVISION";
$post1->picture = "https://cdn.shopify.com/s/files/1/1559/0403/products/negan_1024x1024.jpeg?v=1571948797";
$post1->user = $user1;

$post2 = new itemCollection();
$post2->id = 2;
$post2->namePop = "Bébé Pégase";
$post2->reference = "383";
$post2->categorie = "DISNEY";
$post2->picture = "https://s1.thcdn.com/productimg/1600/1600/11692628-9834556376761334.png";
$post2->user = $user2;

$post3 = new itemCollection();
$post3->id = 3;
$post3->namePop = "Maléfique";
$post3->reference = "232";
$post3->categorie = "DISNEY";
$post3->picture = "https://images-na.ssl-images-amazon.com/images/I/71WOGQDbASL._AC_SL1500_.jpg";
$post3->user = $user1;


$posts = array($post1, $post2, $post3);



?>



<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Pop en scène - Blog Home</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/blog-home.css" rel="stylesheet">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">Pop en scène </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Post / Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">My home posts</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About Pop en Scène</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>



  <!-- hero -->
  <div class="hero-image">
    <div class="hero-text">
    </div>
  </div>

  <!-- Page Content -->
  <div class="container">

    <div class="row">

      <!-- Blog Entries Column -->
      <div class="col-md-8">

        <h1 class="my-4">Accueil
          <small>Dernier posts</small>
        </h1>



<!-- 
<!-- details card section starts from here -->
<section class="details-card">
    <div class="container">
        <div class="row">


<!-- <div class="col-md-4">
                <div class="card-content">
                    <div class="card-img">
                        <img src="https://cdn.shopify.com/s/files/1/1559/0403/products/negan_1024x1024.jpeg?v=1571948797" alt="">
                        <span><h4>Personal Collection</h4></span>
                    </div>
                    <div class="card-desc">
                        <h3>Negan (573)</h3>
                        <p>GrootBoy added Negan (573) to this collection </p>
                            <a href="#" class="btn-card">Partager</a> 
                            <div class="card-footer text-muted">
                    Posted on April 23, 2020 by
                    <a href="#">GrootBoy</a>
                  </div>  
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card-content">
                    <div class="card-img">
                        <img src="img/Exclusive_Funko_Pop_Vinyl-012818.jpg" alt="">
                        <span><h4>Post</h4></span>
                    </div>
                    <div class="card-desc">
                        <h3>POPS EXCLUSIVES!</h3>
                        <p>Découvre les dernières figurines Pop! exclusives et édition limitées! On en a pour toutes les collections!</p>
                            <a href="#" class="btn-card">Partager</a> 
                            <div class="card-footer text-muted">
                    Posted on April 22, 2020 by
                    <a href="#">TheCollectioner</a>
                  </div>  
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card-content">
                    <div class="card-img">
                        <img src="https://images-na.ssl-images-amazon.com/images/I/71WOGQDbASL._AC_SL1500_.jpg" alt="">
                        <span><h4>Personal Collection</h4></span>
                    </div>
                    <div class="card-desc">
                        <h3>Maléfique (232)</h3>
                        <p>Alien OneOne added Negan (573) to this collection</p>
                            <a href="#" class="btn-card">Partager</a>   
                            <div class="card-footer text-muted">
                            Posted on April 22, 2020 by
                    <a href="#">Alien OneOne</a>
                  </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card-content">
                    <div class="card-img">
                        <img src="https://images-na.ssl-images-amazon.com/images/I/71WOGQDbASL._AC_SL1500_.jpg" alt="">
                        <span><h4>Personal Collection</h4></span>
                    </div>
                    <div class="card-desc">
                        <h3>Maléfique (232)</h3>
                        <p>Alien OneOne added Negan (573) to this collection</p>
                            <a href="#" class="btn-card">Partager</a>   
                            <div class="card-footer text-muted">
                            Posted on April 22, 2020 by
                    <a href="#">Alien OneOne</a>
                  </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card-content">
                    <div class="card-img">
                        <img src="https://images-na.ssl-images-amazon.com/images/I/71WOGQDbASL._AC_SL1500_.jpg" alt="">
                        <span><h4>Personal Collection</h4></span>
                    </div>
                    <div class="card-desc">
                        <h3>Maléfique (232)</h3>
                        <p>Alien OneOne added Negan (573) to this collection</p>
                            <a href="#" class="btn-card">Partager</a>   
                            <div class="card-footer text-muted">
                            Posted on April 22, 2020 by
                    <a href="#">Alien OneOne</a>
                  </div>
                    </div>
                </div>
            </div> --> 
            

            <div class="col-md-4">
            <?php 
            foreach($posts as $post){

            
            ?>
                <div class="card-content">
                    <div class="card-img">
                        <img src="<?php   echo $post->picture; ?>" alt="">
                        <span><h4>Personal Collection</h4></span>
                    </div>
                    <div class="card-desc">
                        <h3> <?php echo $post->namePop; ?> ( <?php echo $post->reference; ?> ) </h3>
                        <p> <?php echo $post->user->nickname;?> added <?php echo $post->namePop; ?> (<?php echo $post->reference; ?>) to this collection</p>
                            <a href="#" class="btn-card">Partager</a>   
                            <div class="card-footer text-muted">
                            Posted on April 22, 2020 by
                    <a href="#"><?php   echo $post->user->nickname; ?></a>
                  </div>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</section>


<!-- details card section starts from here -->


 


        <!-- Pagination -->
        <ul class="pagination justify-content-center mb-4">
          <li class="page-item">
            <a class="page-link" href="#">&larr; Older</a>
          </li>
          <li class="page-item disabled">
            <a class="page-link" href="#">Newer &rarr;</a>
          </li>
        </ul>

      </div>

      <!-- Sidebar Widgets Column -->
      <div class="col-md-4">

        <!-- Search Widget -->
        <div class="card my-4">
          <h5 class="card-header">Search</h5>
          <div class="card-body">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Search for...">
              <span class="input-group-btn">
                <button class="btn btn-secondary" type="button">Go!</button>
              </span>
            </div>
          </div>
        </div>

        <!-- Categories Widget -->
        <div class="card my-4">
          <h5 class="card-header">Franchises</h5>
          <div class="card-body">
            <div class="row">
              <div class="col-lg-6">
                <ul class="list-unstyled mb-0">
                  <li>
                    <a href="#">Disney</a>
                  </li>
                  <li>
                    <a href="#">Marvel</a>
                  </li>
                  <li>
                    <a href="#">DC</a>
                  </li>
                  <li>
                    <a href="#">Harry Potter</a>
                  </li>
                  <li>
                    <a href="#">Fortnite </a>
                  </li>
                  <li>
                    <a href="#">Stranger Things</a>
                  </li>
                  <li>
                    <a href="#">Friends</a>
                  </li>
                  <li>
                    <a href="#">WWE</a>
                  </li>
                </ul>
              </div>
              <div class="col-lg-6">
                <ul class="list-unstyled mb-0">
                  <li>
                    <a href="#">Dragon Ball </a>
                  </li>
                  <li>
                    <a href="#">Star Wars</a>
                  </li>
                  <li>
                    <a href="#">The Walking Dead</a>
                  </li>
                  <li>
                    <a href="#">Lord of the Ring</a>
                  </li>
                  <li>
                    <a href="#">My Hero Academia</a>
                  </li>
                  <li>
                    <a href="#">Doctor Who</a>
                  </li>
                  <li>
                    <a href="#">Naruto</a>
                  </li>
                  <li>
                    <a href="#">Pop! Football</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>

        <!-- Side Widget -->
        <div class="card my-4">
          <h5 class="card-header">Side Widget</h5>
          <div class="card-body">
            You can put anything you want inside of these side widgets. They are easy to use, and feature the new Bootstrap 4 card containers!
          </div>
        </div>

      </div>

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Your Website 2019</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->


  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>


</body>

</html>
