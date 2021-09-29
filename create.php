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
          <li ><a href="emp.php">Home</a></li>
            <li><a href="f.php">Franchise</a></li>
            <li ><a href="a.php">Appointment</a></li>
            <li><a href="review.php">Reviews</a></li>
             <li class="current"><a href="create.php"> Create login</a></li>
             <li><a href="login.php">Log out</a></li>

          </ul>
        </nav>
      </div>
    </header>

    <section id="f2">
      <h1>CREATE LOGIN </h1>
  <form name="a" onsubmit=" return check()" method="post" >
    <input  type="text" name="name1" placeholder="Name" value=""><br><br><br>
  
    <input  type="text" name="name" placeholder="Enter ID" value=""><br><br><br>
  
    <input type="password" name="password" placeholder="Enter password" value=""><br><br><br>
    
    <input type="hidden" name="ch">
      <br>
      <input style="background-color: #8B0000; width: 250px;" type="submit" name="Login">
      
    </section>
   

<?php
    $id=isset($_POST['name']) ? $_POST['name'] : ''; 
     $pass=isset($_POST['password']) ? $_POST['password'] : ''; 
       $db = mysqli_connect('localhost','root',"")or
      die('Could not connect: '.mysqli_error());
      mysqli_select_db($db,'project');
      $query = "INSERT INTO employee(id,password) VALUES ('$id','$pass');";
      mysqli_query($db, $query);
      mysqli_close($db);
      ?>

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

    <footer>
      <p style="font-size: 20px;">Elegant de Saphire, Copyright &copy; 2020</p>
    </footer>
  </body>
</html>