<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>The Adoption Shop</title>

<!--
Newline Template
http://www.templatemo.com/tm-503-newline
-->
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/fontAwesome.css">
        <link rel="stylesheet" href="css/templatemo-style.css">
        <link rel="stylesheet" href="css/contact.css">


        <link rel="shortcut icon" href="img/page-icon.png"/>


        <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900" rel="stylesheet">

        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
        <script type="text/javascript" src="js/learnTable.js"></script>
        <script type="text/javascript" src="js/checkForm.js"></script>
        <link rel="stylesheet" href="css/learnTable.css">
    </head>
    <body>

      <div class="overlay"></div>
      <section class="top-part">
        <img src="img/sad-dog.jpeg" />
      </section>

      <section class="cd-hero">

      <div class="cd-slider-nav">
        <nav>
          <span class="cd-marker item-1"></span>
          <ul id="buttons">
            <li><a href="index.html"><div class="image-icon"><img src="img/home-icon.png"></div><h6>Home</h6></a></li>
            <li><a href="learn.html"><div class="image-icon"><img src="img/learn-icon.png" width="60" height="64"></div><h6>Learn</h6></a></li>
            <li><a href="adopt.html"><div class="image-icon"><img src="img/dog-icon.png" width="60" height="64" ></div><h6>Adoption</h6></a></li>
            <li><a href="login.php"><div class="image-icon"><img src="img/projects-icon.png"></div><h6>Login</h6></a></li>
            <li><a href="contact.html"><div class="image-icon"><img src="img/contact-icon.png"></div><h6>Contact Us</h6></a></li>
          </ul>
        </nav>
      </div> <!-- .cd-slider-nav -->


      <li>
        <div class="heading">
          <h1>Log in</h1>
          <span>for us to remember you in the future</span>
        </div>
        <div class="cd-half-width fourth-slide">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <div class="content fourth-content">
                  <div class="row">
                    <form action=<?php $_SERVER['PHP_SELF'] ?> method=Post>
                    <h4> Type in your password </h4>
                     <input type="text" id="inputfield" name="emailaddr" placeholder="Your Email...">
                     <br>
                     <h4> Type in your password </h4>
                     <input type="password" id="inputfield" name="password" placeholder="Your password..">
                     <br>
                     <input type="submit" description="Click to Log in">   
                    </form>
               
                     <br>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </li>

<?php
                     //If the method is post, then start execution of this
                      if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                        //initializes the name and message variables
                       $name = trim($_POST['name']);
                       $message = trim($_POST['message']);
                       $email = trim($_POST["email"]);
                       //placeholder variable that's going to be replaced by database of customers/users and the messages they've sent
                      $names = array(
                                     "John Doe" => "test message",
                                     "Jane Doe" => "test message 2");
                      //initialize variables to help in the looping through of the array
                      $i = 0;
                      $present = 0;

                      //loops through the array/database of names and appends the new message to the previous one
                      //array to be replaced with some form of persistence like a database or file io
                      // To be uncommented when

                       for (; $i < count($names); $i++){
                         if (in_array($name, $names)) {
                           $present = 1;
                           $names[$name] += "\r\n" + $message;
                         }
                       }
                       //or adds the user's name and message to the array if they're a first time user
                       if  ($present == 0) {
                         $names[$name] = $message;
                       }


                       //Checks for a valid email
                       //$email = test_input($_POST["emailaddress"]);
                       if ( !filter_var($email, FILTER_VALIDATE_EMAIL) ) {
                         $emailErr = "Please enter a valid email";
                         echo "<script type='text/javascript'>alert('$emailErr');</script>";
                         }
                      else{
                           //sends an alert telling the user that their message has been sent successfully
                           //if the user gave a name, it is inluded in the message
                           if (isset($name)) {  $msg = "Thanks " . $name . ", your message has been sent!"; }
                           if (empty($name)) {  $msg = "Thanks, your message has been sent!"; }
                           echo "<script type='text/javascript'>alert('$msg');</script>";
                         }
                    }
                      ?>

<footer>
  <p>Copyright &copy; 2018 The Adoption Company

  | Designed by <a href="http://www.templatemo.com" target="_parent"><em>templatemo</em></a></p>
</footer>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

<script src="js/vendor/bootstrap.min.js"></script>
<script src="js/plugins.js"></script>
<script src="js/main.js"></script>
<script src="js/learnTable.js"></script>

</body>
</html>
