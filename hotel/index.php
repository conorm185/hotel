<?php 
session_start();
include 'includes/config.inc.php';
include 'includes/functions.inc.php';

?>

<!DOCTYPE html>
<html>
<head>
<meta charset=utf-8>
    <link href='http://fonts.googleapis.com/css?family=Merriweather' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="css/semantic.js"></script>
    
    <script src="js/bootstrap.js"></script>
    <link href="css/bootstrap.css" rel="stylesheet" >

    <link href="css/semantic.css" rel="stylesheet" >
    <link href="css/icon.css" rel="stylesheet" >
    <link href="css/styles.css" rel="stylesheet">
    <style type="text/css">

    .hidden.menu {
      display: none;
    }

    .masthead.segment {
      min-height: 700px;
      padding: 1em 0em;
    }
    .masthead .logo.item img {
      margin-right: 1em;
    }
    .masthead .ui.menu .ui.button {
      margin-left: 0.5em;
    }
    .masthead h1.ui.header {
      margin-top: 3em;
      margin-bottom: 0em;
      font-size: 4em;
      font-weight: normal;
    }
    .masthead h2 {
      font-size: 1.7em;
      font-weight: normal;
    }

    .ui.vertical.stripe {
      padding: 8em 0em;
    }
    .ui.vertical.stripe h3 {
      font-size: 2em;
    }
    .ui.vertical.stripe .button + h3,
    .ui.vertical.stripe p + h3 {
      margin-top: 3em;
    }
    .ui.vertical.stripe .floated.image {
      clear: both;
    }
    .ui.vertical.stripe p {
      font-size: 1.33em;
    }
    .ui.vertical.stripe .horizontal.divider {
      margin: 3em 0em;
    }

    .quote.stripe.segment {
      padding: 0em;
    }
    .quote.stripe.segment .grid .column {
      padding-top: 5em;
      padding-bottom: 5em;
    }

    .footer.segment {
      padding: 5em 0em;
    }

    .secondary.pointing.menu .toc.item {
      display: none;
    }

    @media only screen and (max-width: 700px) {
      .ui.fixed.menu {
        display: none !important;
      }
      .secondary.pointing.menu .item,
      .secondary.pointing.menu .menu {
        display: none;
      }
      .secondary.pointing.menu .toc.item {
        display: block;
      }
      .masthead.segment {
        min-height: 350px;
      }
      .masthead h1.ui.header {
        font-size: 2em;
        margin-top: 1.5em;
      }
      .masthead h2 {
        margin-top: 0.5em;
        font-size: 1.5em;
      }
    }


  </style>
    <script>
  $(document)
    .ready(function() {

      // fix menu when passed
      $('.masthead')
        .visibility({
          once: false,
          onBottomPassed: function() {
            $('.fixed.menu').transition('fade in');
          },
          onBottomPassedReverse: function() {
            $('.fixed.menu').transition('fade out');
          }
        })
      ;

      // create sidebar and attach to menu open
      $('.ui.sidebar')
        .sidebar('attach events', '.toc.item')
      ;

    })
  ;
  </script>
</head>
<body>

<?php include 'includes/header.inc.php'; ?>

<!-- Page Contents -->
<div class="pusher">
  <div class="ui inverted vertical masthead center aligned segment">


    <div class="ui text container">
      <h1 class="ui inverted header">
        Hotel Armitage
      </h1>
      <h2>Welcome to the world's most famous hotel chain</h2>
      <a href="about.php"><div class="ui huge primary button">Get Started <i class="right arrow icon"></i></div></a>
    </div>

  </div>

  <div class="ui vertical stripe segment">
    <div class="ui middle aligned stackable grid container">
      <div class="row">
        <div class="eight wide column">
          <h3 class="ui header">Do you seek an experience worth remembering?</h3>
          <p>Here at Hotel Armitage, we provide an experience that leaves an impact for years to come.
		  Quality service, high class accomodations, and daily events make it something to behold.
		  If that sounds like an experience, then you've come to the right place.</p>
          <h3 class="ui header">Do you want a vacation that will leave a lasting impact?</h3>
          <p>Yes that's right, you thought it was the stuff of dreams, but this vacation is worth every penny.</p>
        </div>
        <div class="six wide right floated column">
          <img src="images/hotel_armitage.jpg" class="ui large bordered rounded image">
        </div>
      </div>
      <div class="row">
        <div class="center aligned column">
          <a href="about.php" class="ui huge button">Learn More</a>
        </div>
      </div>
    </div>
  </div>


  <div class="ui vertical stripe quote segment">
    <div class="ui equal width stackable internally celled grid">
      <div class="center aligned row">
        <div class="column">
          <h3>"What a Service"</h3>
          <p>That is what they all say about us</p>
        </div>
        <div class="column">
          <h3>"I shouldn't have gone with their competitor."</h3>
          <p>
         -<b>Dale Gribble</b> of DaleTech
          </p>
        </div>
      </div>
    </div>
  </div>

  <div class="ui vertical stripe segment">
    <div class="ui text container">
      <h3 class="ui header">Book your reservation today</h3>
      <p>Are you ready to set your dream vacation today? Then click on the button below to get started.</p>
      <a href ="reservation.php?hotel_id=1" class="ui large button">Read More</a>
      <h4 class="ui horizontal header divider">
        <a href="#">Contact</a>
      </h4>
      <h3 class="ui header">Do you wish to learn about how you can register without any issue?</h3>
      <p>Are you interested in learning more about how our service works? Then click on the button below to get started.</p>
      <a href="contact.php" class="ui large button">I'm Quite Interested</a>
    </div>
  </div>

</div>

</body>
<?php include 'includes/footer.inc.php'; ?>
</html>