<!DOCTYPE html>
<html class="no-js" lang="fr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Simon Pierre Mboma's Portfolio | target_form</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="img/apple-touch-icon.png">
    <!-- Place favicon.ico in the root directory -->
    <link rel="icon" href="img/favicon.ico">

    <link rel="stylesheet" href="css/normalize.css">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/css/materialize.min.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Abel" rel="stylesheet">
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
</head>
<body>
  <div class="wrap">
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

    <!-- header starts here===================================================== -->
    <header>
      <ul class="title">
        <li>Simon pierre MBOMA, Web Developper</li>
        <li>My Portfolio</li>
      </ul>
      <!--nav starts============================================================ -->
      <nav>
          <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
          <ul class="hide-on-med-and-down">
            <li><a href="index.html">Home</a></li>
            <li><a href="about.html">About</a></li>
            <li><a href="cv.html">CV</a></li>
          </ul>
          <ul class="side-nav" id="mobile-demo">
            <li><a href="index.html">Home</a></li>
            <li><a href="about.html">About</a></li>
            <li><a href="cv.html">CV</a></li>
          </ul>
      </nav>
      <!--nav ends here========================================================= -->
    </header>
    <!-- header ends here======================================================= -->
    <div class="wrapper">
      <!--section starts here===================================================== -->
      <section class="section_index">

    <?php
      if (isset($_FILES['index']) AND $_FILES['index']['error'] == 0 AND $_POST['age']>= 21){
          if ($_FILES['index']['size'] <= 2000000){
             $infosfichier = pathinfo($_FILES['index']['name']);
             $extension_upload = $infosfichier['extension'];
             $extensions_autorisees = array('html');
             if (in_array($extension_upload, $extensions_autorisees)){
               move_uploaded_file($_FILES['index']['tmp_name'], 'uploads/' . basename($_FILES['index']['name']));
                              echo 'Informations about your opinion have been recorded !'. '</br>';
             }
          }
          if (isset($_POST['name']) AND ctype_alpha($_POST['name']) AND isset($_POST['firstname']) AND ctype_alpha($_POST['firstname'])){
              echo 'Goodmorning'. ' ' .htmlspecialchars($_POST['name']).' ' .htmlspecialchars($_POST['name']). '</br>';
          }
          else {
              echo 'You forget to write your name or/and your first'. '</br>';
          }
          if (isset($_POST['age']) AND $_POST['age'] == is_int){
              echo 'You are'. ' ' .htmlspecialchars($_POST['age']). 'years old'.'</br>';
          }
          else{
              echo 'Your age to be en integer '. '</br>';
          }
          if (isset($_POST['sex'])){
            if ($_POST['sexe']== 'man'){
              echo 'You are a gentle'.htmlspecialchars($_POST['sex']). '</br>';
            }
            else{
              echo 'You are a smart '. ' '.htmlspecialchars($_POST['sexe']). '</br>';
          }
        }
          else {
              echo 'If you are neither a man or woman what going on?'. '</br>';
          }
          if (isset($_POST['city']) AND ctype_alpha($_POST['city'])){
              echo 'You come from'. ' ' .htmlspecialchars($_POST['city']).' '. '</br>';
          }
          else{
              echo 'Were are you from ?';
          }
          ?>
          <h5>Loisirs:</h5>
          <?php
          if (isset($_POST['hobbies']) AND !empty($_POST['hobbies'])){
            foreach ($_POST['hobbies'] as $cool=>$value) {
              echo htmlspecialchars($value). '</br>';
          }

       }
       else{
           echo 'No file found or error in your file';
      }
    }
      ?>
      <h5>Remarque:</h5>
    <p>N'hésitez pas à retourner sur la fiche de renseignement afin d'apportez <a href="index.php">des rectifications en cliquant ici</a></p>

  </section>
</div>
<!--  wrapper ends here=====================================================-->
</div>
<!--  wrap ends here============================================================-->
<!--  footer starts here========================================================-->
<footer>
<div class="row">
<div class="col s6">
  <h6>Portfolio Mboma</h6>
  <p class="grey-text text-lighten-4">Web Developper</p>
</div>
<div class="skills-contact">
  <div class="col s6">
    <h6>CONTACT:</h6>
    <ul class="social">
      <li><a class="grey-text text-lighten-3" href="tel.: 06 46 04 71 09"><i class="fa fa-phone" aria-hidden="true"></i></a></li>
      <li><a class="grey-text text-lighten-3" href="https://mobile.twitter.com/cityzenmboma5"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
      <li><a class="grey-text text-lighten-3" href="https://gmail.com/simonpierremboma@gmail.com"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
    </ul>
  </div>
</div>
</div>
<a href="cv.html" class="hide-on-med-and-up">CV</a>
<ul class="hide-on-med-and-down">
<li>HTML&amp;CSS</li>
<li>JavaScript</li>
<li>PHP</li>
<li>Word Press</li>
<li>Population's Genetics</li>
</ul>
<p>&copy; 2016 Simon Mboma</p>
</footer>
<!-- footer ends here=======================================================-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="https://www.atlasestateagents.co.uk/javascript/tether.min.js"></script>
<script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
<script>
    window.jQuery || document.write('<script src="js/vendor/jquery-1.12.0.min.js"><\/script>')
</script>
<script src="js/plugins.js"></script>
<script src="js/main.js"></script>
<script src="js/jQuery3.1.min.js"></script>
<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/js/materialize.min.js"></script>

<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
<script>
    (function(b, o, i, l, e, r) {
        b.GoogleAnalyticsObject = l;
        b[l] || (b[l] =
            function() {
                (b[l].q = b[l].q || []).push(arguments)
            });
        b[l].l = +new Date;
        e = o.createElement(i);
        r = o.getElementsByTagName(i)[0];
        e.src = 'https://www.google-analytics.com/analytics.js';
        r.parentNode.insertBefore(e, r)
    }(window, document, 'script', 'ga'));
    ga('create', 'UA-XXXXX-X', 'auto');
    ga('send', 'pageview');
</script>
</body>

</html>
