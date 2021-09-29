<!DOCTYPE html>
<html>
  <head>
    
    <title>Spa and salon System | Welcome</title>
    <link rel="stylesheet" href="./css/style.css">
    <style >
table, th, td {
  border: 1px solid black;
}
#t01 {
  width: 100%;    
  background-color: #f1f1c1;
}
    </style>
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
            <li class="current"><a href="a.php">Appointment</a></li>
            <li><a href="review.php">Reviews</a></li>
             <li><a href="create.php"> Create login</a></li>
             <li><a href="login.php">Log out</a></li>


          </ul>
        </nav>
      </div>
    </header>
    <center>  <h1>  APPOINTMENTS</h1></center>

    
      <table  id="t01"style="width: 100%;">
<tr>
<th>NAME</th>
<th>EMAIL</th><th>MOBILE NUMBER</th>
<th>LOCATION</th><th>DATE</th><th>TIME</th>
</tr>

    <?php 
       $db = mysqli_connect('localhost','root',"")or
      die('Could not connect: '. mysqli_error());
      mysqli_select_db($db,'project');
      $query = "Select * from appointment";
      $sq=mysqli_query($db, $query);
      while ($row=mysqli_fetch_array($sq))
{ 
mysqli_query($db, $query);
echo "<tr><td>". $row['name']." </td><td>".
$row['email']." </td><td>".$row['number']." </td><td>".$row['location']." </td><td>".$row['date']." </td><td>".
$row['time']." </td></tr>";

}



      

      mysqli_close($db);
      ?>
    </table>

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