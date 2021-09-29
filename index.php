<!DOCTYPE html>
<html>
  <head>
    
    <title>Spa and salon System | Welcome</title>
    <link rel="stylesheet" href="./css/style.css">
  </head>
  <body>
    <header>
      <div class="container">
        <div id="branding">
          <img  src="./img/logo.jpeg">
        </div>
        <nav>
          <ul>
            <li class="current"><a href="index.php">Home</a></li>
            <li><a href="services.php">Services</a></li>
             <li><a href="franchise.php">Franchise</a></li>
             <li><a href="appointment.php">Appointment Booking</a></li>
            <li><a href="product.php">Locate us</a></li>
            <li><a href="login.php">login</a></li>

          </ul>
        </nav>
      </div>
    </header>

    <section id="showcase">
      <div class="container">
      </div>
    </section>

    <section id="newsletter">
      <div class="container">
        <h1>Elegant de Saphire-  WHERE BEAUTY MEETS SOUL</h1>
        <br>
        
      </div>
      
    </section>

    <section id="boxes">
      <div class="container">
        <div class="box">
          <h3>CONTACT US</h3>
          <p>Soma Vine Village

Survey No. 1, Village Ganghavare, Gangapur-Ganghavare Road, Nashik 422 222, Maharashtra, India.  <br> Mob : 9721025633 <br>Email: Elegent de Saphire</p>
        </div>
        <div class="box">
          <h3>CONNECT WITH US</h3>
          <a id="ex" href="https://www.instagram.com/?hl=en"><img style="width: 50px; height: 50px ; padding: 20px;" src="./img/s1.jpeg" ></a>
      <a id="ex" href="https://www.linkedin.com/?hl=en"><img style="width: 50px; height: 50px;padding: 20px;"src="./img/s2.jpeg" ></a>
      <a id="ex" href="https://www.twitter.com/?hl=en"><img style="width: 50px; height: 50px;padding: 20px;"src="./img/s3.jpeg" ></a>
    </footer>
        </div>
        
      </div>
    </section>
    <form style=" background-color:#e8491d;padding: 20px;padding-left: 200px;" method="post" name="g">
        <textarea rows="5" cols="150" name="review" placeholder="write your review...."></textarea>
        <br>  
        <input style="margin-left:500px;" type="submit" name="submit">
      </form>
<?php
    $commen=isset($_POST['review']) ? $_POST['review'] : ''; 
       $db = mysqli_connect('localhost','root',"")or
      die('Could not connect: '.mysqli_error());
      mysqli_select_db($db,'project');
      $query = "INSERT INTO reviews(comment) VALUES ('$commen');";
      mysqli_query($db, $query);
      mysqli_close($db);
      ?>
    <footer>
      <p style="font-size: 20px;">Elegant de Saphire, Copyright &copy; 2020</p>
    </footer>
  </body>
</html>
