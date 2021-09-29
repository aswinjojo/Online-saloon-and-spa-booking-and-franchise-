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
            <li class="current"><a href="emp.php">Home</a></li>
            <li><a href="f.php">Franchise</a></li>
            <li><a href="a.php">Appointment</a></li>
            <li><a href="review.php">Reviews</a></li>
             <li><a href="create.php"> Create login</a></li>
             <li><a href="login.php">Log out</a></li>
            

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
      </div>
    </section>

 <?php
    
       $db = mysqli_connect('localhost','root',"")or
      die('Could not connect: '. mysqli_error());
      mysqli_select_db($db,'project');
      $query = "Select * from appointment";
      $sq=mysqli_query($db, $query);
      $count=0;
      if(mysqli_query($db,"DELETE FROM appointment WHERE name='';"))
{}
else
{}
      while ($row=mysqli_fetch_array($sq))
{
  $count++;
  
}echo "Appointments :";
echo($count);
 $query = "Select * from franchise";
      $sq=mysqli_query($db, $query);
      $count1=0;
      if(mysqli_query($db,"DELETE FROM franchise WHERE name='';"))
{}
else
{}
      while ($row=mysqli_fetch_array($sq))
{
  $count1++;
  
}
echo "<br><br>Franchise :";
echo($count1);
$query = "Select * from reviews";
      $sq=mysqli_query($db, $query);
      $count2=0;
      if(mysqli_query($db,"DELETE FROM reviews WHERE comment='';"))
{}
else
{}
      while ($row=mysqli_fetch_array($sq))
{
  $count2++;
  
}
echo "<br><br>Reviews :";
echo($count2);
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