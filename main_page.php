<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!--Icon-->
    <link rel="icon" href="Images/Cinema.png">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!--CSS-->
    <link rel="stylesheet" href="css/main.css">
    <!--Javascript-->
    <script src="javascript/main.js"></script>
    <!-- Bootstrap CSS v5.2.0-beta1 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"  integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!--Slick-->
    <link rel="stylesheet" href="slick-1.8.1/slick/slick.css">
    <link rel="stylesheet" href="slick-1.8.1/slick/slick-theme.css">
    <!--Animation-->
    <!--animation-->
    <link rel="stylesheet" href="animation/animate.css-master/animate.min.css">
    <!--icons-->
    <script src="https://kit.fontawesome.com/e2fad5bd0b.js" crossorigin="anonymous"></script> 
  </head>
  <body onscroll="button()">
  <?php include "php/db_conn.php"?>
    <div class="text-center animate__fadeOutUp animate__fadeInUp" id="button" onclick="up()">
      <i class="fas fa-2x fa-arrow-up"></i>
    </div>
        <!-- NAV BAR STARTS HERE -->
        <nav class="navbar col-12">
          <div class="container-fluid">
            <div class="webname">H <img src="Images/Cinema.png" alt=""></div>
            <div class="nav-links">
              <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#contact">Contact Us</a></li>
                <li><a href="php/login.php">Log In</a></li>
                <li><a href="php/adminlogin.php">Admin</a></li>
              </ul>
            </div>
          </div>
        </nav>
        <!-- NAVBAR ENDS HERE -->
    
        <!-- SLIDER STARTS HERE -->
    
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="Images\Placeholder1.png" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h2>Welcome To H cinemas</h2>
        <p>Pakistan's top rated cinema</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="Images\carousel2.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Enjoy first ever virtual cinema introduced</h5>
        <button class="btn btn-outline-success"><a href="#movie">Watch Movie</a></button>
      </div>
    </div>
    <div class="carousel-item">
      <img src="Images\Placeholder3.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>Some representative placeholder content for the third slide.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
    
        <!-- SLIDER ENDS HERE -->
        <h3 class="text-center mt-5" id="movie">MOVIES</h3>
        <div class="autoplay offset-lg-2 col-lg-8 mt-5 mb-5">
         <?php
          $sql = "SELECT * from movie;";
          $res = mysqli_query($conn,  $sql);
          if (mysqli_num_rows($res) > 0) {
          	while ($row = mysqli_fetch_assoc($res)) {
              echo "<div class='movie'><form action='php/show.php' method='post'>
                  <div class='card col-10'>
                    <div class='book col-12 text-center'><button type='submit'>BOOK NOW</button></div>
                    <img src ='php/uploads/".$row['image_url']."' class='card-img-top'>
                    <div class='card-body'>
                     <p class='card-text'>".$row['m_name']."<br>".$row['m_des']."</p>
                     <input type='hidden' name='link' value='".$row['video']."'>
                     </div></div></div><form>";
            };
          }
          echo "</div>
          <div id='myDIV' style='display:none;'>
           <label>Enter Seats</label>
           <input type='text' id='seats' onchange='price()'>
           <label>Price</label>
           <span id='price'></span><br><input type='submit' value='Submit'>
          </div>"
          ?>
    <!-- Footer Starts Here-->
        <div id="contact">
           <?php
           include "php/footer.php";
           ?>
        </div>
    
    <!-- Footer Ends Here-->
    
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
    
    <script>
        $(document).ready(function(){
        $('.autoplay').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 1200,
      });
    });
      </script>
      <!--Slick-->
    <script src="slick-1.8.1\slick\slick.min.js"></script>
    <!--animate.css-->
    <script src="WOW-master/dist/wow.min.js"></script>
    <script src="js/wow.min.js"></script>
              <script>
              new WOW().init();
              </script>
      <script>
        function movie(){
          scrollto(600,1000);
        }
      </script>
      <style>
     <?php include 'css/main.css'; ?>
</style>
  </body>
</html>