<!DOCTYPE html>
<html>
  <head>
    
    <title>Spa and salon System | Welcome</title>
    <link rel="stylesheet" href="./css/style.css">
    <script type="text/javascript">
    function check()
    {var y = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
    var x =/^[0-9]{10}$/;
    var z =/^[a-zA-Z ]+$/; 
     if(!document.forms["a"]["name"].value.match(z))
 {
    alert("Invalid name format");
    return false;
  }
  if(!document.forms["a"]["email"].value.match(y))
 {
    alert("Invalid EMAIL ADDRESS format");
    return false;
  }
  if(!document.forms["a"]["mobile"].value.match(x))
 {
    alert("Invalid Mobile Number format");
    return false;
  }
  
  return true;}
  </script>
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
             <li class="current"><a href="appointment.php">Appointment Booking</a></li>
            <li><a href="product.php">Locate us</a></li>
            <li><a href="login.php">login</a></li>


          </ul>
        </nav>
      </div>

    </header>
     <img src="./img/s6.jpg"style="width:102%;height:500px"; >

   

    <section id="newsletter">
      <div class="container">
      </div>
    </section>
    <section id="f2">
      <h1>APPOINTMENT BOOKING </h1>
  <form name="a" onsubmit=" return check()" method="post" >
  
    <input  type="text" name="name" placeholder="Your full name" value=""><br><br><br>
  
    <input type="text" name="email" placeholder="Your email" value=""><br><br><br>
    <input type="text" name="mobile" placeholder="Enter 10 digit mobile no " value=""><br><br><br>
    <input type="text" name="LOCATION" placeholder="location " value=""><br><br><br>
    <input type="date" id="AP" name="AP"><br><br><br>
  <input type="time" id="appt" name="appt"><br><br><br>
    
      <br>
      <input style="background-color: #8B0000; width: 250px;" type="submit" name="submit">
      
    </section>

<?php
    $name=isset($_POST['name']) ? $_POST['name'] : ''; 
     $email=isset($_POST['email']) ? $_POST['email'] : ''; 
       $mobile=isset($_POST['mobile']) ? $_POST['mobile'] : ''; 
     $location=isset($_POST['LOCATION']) ? $_POST['LOCATION'] : ''; 
     $date=isset($_POST['AP']) ? $_POST['AP'] : '';
     $time=isset($_POST['appt']) ? $_POST['appt'] : '';
       $db = mysqli_connect('localhost','root',"")or
      die('Could not connect: '.mysqli_error());
      mysqli_select_db($db,'project');
      $query = "INSERT INTO appointment(name,email,number,location,date,time) VALUES ('$name','$email','$mobile','$location','$date','$time')";
      mysqli_query($db, $query);
  
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require 'vendor/autoload.php';
$mail = new PHPMailer(true);

try {
    //Server settings
   // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'elegantdesaphire@gmail.com';                     // SMTP username
    $mail->Password   = 'Eleg_123';                               // SMTP password
    $mail->SMTPSecure = 'tls';         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom('elegantdesaphire@gmail.com', 'Elegant Spa');
    $mail->addAddress($email);     // Add a recipient
    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Appoinment Details of '.$name;
    $mail->Body    = 'Your Appoinment is booked on <b>'.$date.' at '.$time;
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    
}


    
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