<?php
session_start();
include 'includes/config.inc.php';
include 'includes/functions.inc.php';


?>


<!DOCTYPE html>
<html lang=en>
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
        body {
          background-color: #DADADA;
        }
        body > .grid {
          height: 100%;
        }
        .column {
          max-width: 450px;
        }
    </style>

</head>
<body >

        <?php include 'includes/header.inc.php'; ?>

        <div class="ui middle aligned center aligned grid">
          <section class="four wide column">
            <h2 class="ui teal image header">

              <div class="content">
                Leave a Review
              </div>

            </h2>

            <form class="ui reply form" method="GET" action="create-review.php">
                <div class="form-group">
                  <label for="ratings">Reviews Rating:</label>
                  <!-- the value attritube must be at the end-->
                  <label class="radio-inline"><input type="radio" name="ratings" value="0" checked>0</label>
                  <label class="radio-inline"><input type="radio" name="ratings" value="1">1</label>
                  <label class="radio-inline"><input type="radio" name="ratings" value="2">2</label>
                  <label class="radio-inline"><input type="radio" name="ratings" value="3">3</label>
                  <label class="radio-inline"><input type="radio" name="ratings" value="4">4</label>
                  <label class="radio-inline"><input type="radio" name="ratings" value="5">5</label>
                </div>
                
                <div class="field textarea">
                  <textarea name="comment"></textarea>
                </div>
                
                <input type="hidden" name='id' value="<?php echo $_GET['id'] ?>">
                
                <button type="submit" class="ui fluid large teal submit button">
                    Submit
                </button>
              </form>

          </section>
        </div>
</body>

<?php include 'includes/footer.inc.php'; ?>
    
</html>