<?php ?>
<!DOCTYPE html>
<html>

<head>
    <script data-ad-client="ca-pub-5767173333639732" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-149680523-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-149680523-1');
</script>

  <!-- Icon -->
  <link rel="icon" href="img/lbe.png" type="image/gif" sizes="16x16">
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!-- Import Font Awesome CDN -->
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN"
    crossorigin="anonymous">
  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />
  <link type="text/css" rel="stylesheet" href="css/main.css" />

  <!--Let browser know website is optimized for mobile-->
  <meta name="keywords" content="learnbyexample,learn by example,HTML, CSS, XML, XHTML, JavaScript,Physics,Chemistry,Mathematics,NITSikkim,Class12,Class11,Education,AngularJs,ReactJs,CodeIgniter,Jeemain,programming,training,learning,quiz,primer,lessons,references,examples,exercises,source code,colors,demos,tips,geeky gadgets,android news,geek news,geek gadgets,geek toys and gadgets">
  <meta name="description" content="Well organized and easy to understand tutorials for Class 11 and 12 students.Here they not only get quality content but they get it for free also.">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>LearnByExample</title>
</head>

<body id="home" class="scrollspy" onload="myLoader()">

  <?php include "includes/header.php" ?>
  <section class="section section-search teal darken-1" style="padding-top: 100px;">
    <div class="container">
      <div class="row">
        <div class="col s12" style="font-family: montserrat;">
          <h4 style="text-align: center;">Certificate Verification</h4>
          <p style="text-align: center;">
            Here you can check the issued certificates by entering the serial number in the input field.
          </p>
        </div>
      </div>
    </div>
  </section>
  <section>
      <div class="row">
        <div class="col s9 m4 hide-on-small-only"></div>  
      <div class="col s9 m4">
          <div class="card-panel grey lighten-3">
            <h5 style="text-align: center;" class="purple-text">Verification</h5>
            <div class="input-field">
                <input id="name" type="text" class="black-text">
                <label for="name">Name</label>
            </div>
            <div class="input-field">
                <input id="phone" type="tel">
                <label for="phone">Serial Number</label>
             </div>
            <input type="submit" value="Submit" class="btn">
          </div>
        </div>
        <div class="col s9 m4 hide-on-small-only"></div>  
        </div>
  </section>
    <!-- Footer -->
    <?php include "includes/footer.php" ?>
    <!-- POPUPS -->
    <?php include "includes/popups.php" ?>

  <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
  <script src="https://use.fontawesome.com/246a8c1139.js"></script>
  <script type="text/javascript" src="js/materialize.min.js"></script>
  <script type="text/javascript" src="js/main.js"></script>
</body>

</html>  