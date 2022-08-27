<?php

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$mailheader = "From:".$name."<".$email.">\r\n";

$recipient = "educationisfuture.best@gmail.com";

mail($recipient, $message, $mailheader) or die("Error!");

echo'<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css"
      integrity="sha512-L7MWcK7FNPcwNqnLdZq86lTHYLdQqZaz5YcAgE+5cnGmlw8JT03QB2+oxL100UeB6RlzZLUxCGSS4/++mNZdxw=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link rel="shortcut icon" type="x-icon" href="enquery-css/icon.jpeg" />
    <link rel="stylesheet" href="enquery-css/enquery-style.css" />
    <title>Enquery Form</title>
  </head>
  <body>
    <header id="home" class="main-header">
      <div class="navbar">
        <nav>
          <img class="logo" src="enquery-css/LOGO.jpeg" alt="" />
          <ul>
            <li><a href="../index.html">Home</a></li>
            <li><a href="../index.html#gallery">Contact</a></li>
            <li><a href="../index.html#about">About Us</a></li>
          </ul>
        </nav>
      </div>
    </header>

    <main>
      <section id="form">
        <div id="overlay">
          <form action="enquery-css/mail.php" method="POST">
            <h1 class="note">Thank you for contacting us. <br> We will get back to you as soon as possible!</h1>

            <div class="center note" >
              <a href="index.html" class="center">Home Page</a>
            </div>
            <!-- <div class="center">
              <input type="submit" value="Send Message" />
              <p id="success"></p>
            </div> -->

          </form>
        </div>
      </section>
    </main>

    <footer class="footer bg-light">
      <div class="social">
        <h4 href="#"><i class="fab fa-whatsapp"></i> +49 176 83375652</h4>
        <!-- <a href="#"><i class="fab fa-instagram fa-2x"></i></a> -->
      </div>
      <p>Copyright &copy 2022 | EducationIsFuture. All rights reserved.</p>
    </footer>
      <script src="enquery-css/enquery-script.js"></script>
    </body>
</html>';

?>