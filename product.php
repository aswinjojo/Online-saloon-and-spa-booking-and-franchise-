<!DOCTYPE html>
<html>
  <head>
    
    <title>Spa and salon System | Welcome</title>
    <link rel="stylesheet" href="./css/style.css">
    <style >
      table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
th, td {
  padding: 15px;
  text-align: left;
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
              <li ><a href="index.php">Home</a></li>
            <li ><a href="services.php">Services</a></li>
             <li ><a href="franchise.php">Franchise</a></li>
             <li ><a href="appointment.php">Appointment Booking</a></li>
            <li class="current"><a href="product.php">Locate us</a></li>
            <li ><a href="login.php">login</a></li>


          </ul>
        </nav>
      </div>
    </header>

    <img src="./img/l1.jpg"style="width:102%;height:500px"; >
    <section id="newsletter">
      <div class="container">
        <h2>ENTER THE STATE :</h2>
        <form name="a" onsubmit=" return check()" action="" method="post">
          <input type="text" name="st" placeholder="STATE">
          <button type="submit" style="margin-left: 100px; background-color: blue; float: right;" class="button_1">Search</button>
        </form>
      </div>
    </section>
      <table  id="t01"style="width: 100%;">
<tr>
<th>State</th>
<th>Place</th><th>Address</th><th>Contact</th>
</tr>

    <?php
    $State=isset($_POST['st']) ? $_POST['st'] : ''; 
       $db = mysqli_connect('localhost','root',"")or
      die('Could not connect: '. mysqli_error());
      mysqli_select_db($db,'project');
      $query = "Select * from location";
      $sq=mysqli_query($db, $query);
      while ($row=mysqli_fetch_array($sq))
{ 
if($row['State']==$State)
{
mysqli_query($db, $query);
echo "<tr><td>". $row['State']." </td><td>".
$row['Place']." </td><td>".
$row['Address']." </td><td>".
$row['Mobile Number']." </td><tr>";
}
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