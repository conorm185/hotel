<?php

  session_start();
include 'includes/art-config.inc.php';
include 'includes/art-functions.inc.php';
$logonDB = new LogonDB($pdo);

    $isValid = true;
    $errors = "";

  if (isset($_POST['email']) && isset($_POST['password']) && isset($_POST['password2'])) {
    
    if (empty($_POST['email']) || !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)) {
      $errors .= 'Invalid email';
      $isValid = false;
    }

    if (empty($_POST['password']) || empty($_POST['password2'])) {
      $errors .= 'Invalid password: fill both fields';
      $isValid = false;
    }

    if ($_POST['password'] != $_POST['password2']) {
      $errors .= 'Invalid password: password fields must match';
      $isValid = false;
    }

    if ($isValid) {
        $logonDB->insertUser($_POST['email'],$_POST['password']);
        header("Location: login.php");  
    }

  }
  
  
  
?>


<!DOCTYPE html>
<html lang=en>
<head>
<meta charset=utf-8>
    <link href='http://fonts.googleapis.com/css?family=Merriweather' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="css/semantic.js"></script>


    <link href="css/semantic.css" rel="stylesheet" >
    <link href="css/icon.css" rel="stylesheet" >
    <link href="css/styles.css" rel="stylesheet">


</head>
<body >

        <?php include 'includes/art-header.inc.php'; ?>

        <div class="ui middle aligned center aligned grid">
          <section class="four wide column">
            <h2 class="ui teal image header">

              <div class="content">
                Create an Account
              </div>

            </h2>

            <form class="ui large form" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
              <div class="ui stacked segment">
                <div class="field">
                  <div class="ui left icon input">
                    <i class="user icon"></i>
                    <input type="text" name="email" placeholder="E-mail address">
                  </div>
                </div>
                <div class="field">
                  <div class="ui left icon input">
                    <i class="lock icon"></i>
                    <input type="password" name="password" placeholder="Password">
                  </div>
                </div>
                  
                <div class="field">
                  <div class="ui left icon input">
                    <i class="lock icon"></i>
                    <input type="password" name="password2" placeholder="Confirm Password">
                  </div>
                </div>
                <button type="submit" class="ui fluid large teal submit button">
                    Signup
                </button>

              </div>

              <div class="ui error message"><?php  echo $errors; ?></div>
                
            </form>

          </section>
        </div>
</body>

<footer class="ui black inverted segment">
    <div class="ui container">footer</div>
</footer>
</html>