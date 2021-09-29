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
             <li class="current"><a href="franchise.php">Franchise</a></li>
             <li><a href="appointment.php">Appointment Booking</a></li>
            <li><a href="product.php">Locate us</a></li>
            <li><a href="login.php">login</a></li>

          </ul>
        </nav>
      </div>
    </header>
        <img src="./img/s4.png"style="width:102%;height:500px"; >
        <section id="newsletter">
      <div class="container">
      </div>
    </section  >

    <section style="float: right;" id="fra">
      <h1>Franchise Request</h1>
  <form name="a" onsubmit=" return check()" method="post" >
      <input  type="text" name="name" placeholder="Your full name" value=""><br><br><br>
    <input type="text" name="email" placeholder="Your email" value=""><br><br><br>
        <input type="text" name="mobile" placeholder="Enter 10 digit mobile no " value=""><br><br><br>
     <input type="radio" name="agree"checked value="a">I agree completely<br><br> 
      <input type="radio" name="agree"  value="d">I disagree completely<br><br><br>
      <br>
      <input type="submit" name="submit">
      <br><br>

    

  </form>

    </section>
    <section id="f3">
      <p>As a Elegant de Saphire franchisee, you'll be at the cutting edge of franchising. Valued at INR 400 billion, your cut of the salon and spa industry is just a hair's breadth away. It's an opportunity to win success and earn some fun in the process. The industry's top brand is your top business opportunity. You can bring Studio11 to your city with an investment in the range of 20 Lacs - 50 Lacs  <br>

Why should you choose the salon and spa business? Well, the top reason is that the business, just like hair, never stops growing. It's a recession-proof bet; a stable, all-cash business with recurring revenues and no outstanding receivables! <br>

We offer a world class unisex salon setup at reasonable rates and high branding standards.  We have a state of the art website and communication tools to communicate our game changing vision and values. All our salons get 3D visuals and 60 days turnkey erection. The roll out is a 45 day process where we walk you through the store opening process from end to end. Our marketing programs include innovative digital marketing incorporating online lead generation support, SMO, SEO and SMM targeted at national, regional and local levels to drive customer walk-ins.</p>
    </section>

<?php
    $name=isset($_POST['name']) ? $_POST['name'] : ''; 
     $email=isset($_POST['email']) ? $_POST['email'] : ''; 
       $mobile=isset($_POST['mobile']) ? $_POST['mobile'] : ''; 
       $db = mysqli_connect('localhost','root',"")or
      die('Could not connect: '.mysqli_error());
      mysqli_select_db($db,'project');
      $query = "INSERT INTO franchise (name, email, mob) VALUES ('$name','$email','$mobile');";
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
    $mail->Subject = 'Franchise Request from'.$name;
    $mail->Body    = 'Your Franchise request submitted successfully   <b>'.'Mobile no:'.$mobile;
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