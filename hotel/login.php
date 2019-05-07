<?php
session_start();
include 'includes/config.inc.php';
include 'includes/functions.inc.php';

$logonDB = new LogonDB($pdo);


$email = 'root';
  $password  = 'root';
  $isValid = true;

  $errors = "";

  if (isset($_POST['email']) && isset($_POST['password'])) {

    if (empty($_POST['email']) || !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)) {
      $errors .= 'Invalid email';
      $isValid = false;
    }

    if (empty($_POST['password'])) {
      $errors .= 'Invalid password';
      $isValid = false;
    }



    if ($isValid) {
      //check the username & password match
        
        $info = $logonDB->validateUser($_POST['email'],$_POST['password']);
        if ($info['pass'] == md5($_POST['password'].$info['salt'])){
            $_SESSION['email'] = $info['email'];
            $_SESSION['customer_id'] = $info['customerID'];
            //break;
            //$_SESSION['name'] = $info['Pass'];
            //$_SESSION['customer_id'] = $info['Pass'];
            header("Location: index.php");
        }
        
        
        
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
                Log-in to your account
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
                <button type="submit" class="ui fluid large teal submit button">
                    Login
                </button>

              </div>

              <div class="ui error message"><?php  echo $errors; ?></div>

            </form>

            <div class="ui message">
              New to us? <a href="signup.php">Sign Up</a>
            </div>
          </section>
        </div>
</body>

<?php include 'includes/footer.inc.php'; ?>
    
</html>
