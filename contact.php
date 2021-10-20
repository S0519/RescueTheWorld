<?php 
if($_POST)
{
  $msg = $_POST['msg'];
  mail("hardworkerhamza@gmail.com","Message from ".$_POST['name']." | ".$_POST['email'],$msg);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/main.css">
    <title>Contact Us</title>
</head>
<body>
    <div class="container-fluid p-0" id="mainCon2">
        
        <div id="demo3" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="Images/slideOther1.jpg">
              </div>
              <div class="carousel-item">
                <img src="Images/slideOther2.jpg">
              </div>
              <div class="carousel-item">
                <img src="Images/slideOther3.jpg">
              </div>
            </div>
        </div>
        <div class="section section2">
          <h1>Contact Us</h1>
          <p>Save Lives, Support Economic Independence</p>
        </div>
      

        <nav class="navbar navbar-expand-lg navbar-dark fixed-top px-5">
            <a class="navbar-brand" href="#"><img src="Images/logo.png" class="logoImg"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end mb-auto mt-4" id="navbarNavDropdown">
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link text-center" href="index.html">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-center" href="about.html">About Us</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-center" href="projects.html">Projects</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active text-center" href="contact.html">Contact Us</a>
                </li>
              </ul>
            </div>
        </nav>
        
        <div class="sideIcons">
          <a href="https://www.facebook.com/rescuetheworldinc"><button class="btn socialIcons mb-5"><i class="fab fa-facebook-f"></i></button></a><br>
          <a href="mailto:social@rescuetheworldinc.org"><button class="btn socialIcons"><i class="fas fa-envelope"></i></button></a>
        </div>

    </div>
    
    <div class="container">
      <div class="row mt-5">
        <div class="col-lg-12">
            <div class="sameLine">
              <img src="Images/dots.png">
              <h3>Message Sent Successfully</h3>
            </div>
        </div>
        <div class="col-lg-7">
          <hr class="line">
        </div>
      </div>
      <div class="row mt-4">
        <div class="col-lg-12 pt-4">
         <h1 class="text-center text-priamry">Thanks for contacting<br>We will response you soon.</h1>
        </div>
      </div>
    </div>
    
    <div class="container">
      <div class="row footer">
        <div class="col-12 text-center">
            <hr class="line2">
            <font class="copyrightText">© <span class="spacingText">2021</span> All Rights Reserved | <span class="spacingText">RESCUE THE WORLD INC.</span></font>
        </div>
    </div>
    </div>
    <script>
      $(function () {
        $(document).scroll(function () {
          var $nav = $(".navbar");
          $nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height());
        });
      });
    </script>
</body>
</html>