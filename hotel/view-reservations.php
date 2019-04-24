<?php

include 'includes/config.inc.php';

session_start();

if (! isset($_SESSION['favorites'])) {
    $favorites = array();
    $_SESSION['favorites'] = $favorites;
}

$favorites = $_SESSION['favorites'];


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

<?php include 'includes/header.inc.php'; ?>

<main class="ui container">

    <section class="ui basic segment ">
      <h2>Favorites</h2>
        <table class="ui basic collapsing table">
          <thead>
            <tr>
              <th>Image</th>
              <th>Title</th>
              <th>Action</th>
          </tr></thead>
          <tbody>
              <?php
                foreach ($favorites as $fav) {
                    echo '<tr>';
                    echo '<td><img src="images/art/works/square-small/' . $fav[1] . '.jpg"></td>';
                    echo '<td><a href="single-painting.php?id=' . $fav[0] . '">' . $fav[2] . '</a></td>';
                    echo '<td><a class="ui small button" href="remove-favorites.php?id=' . $fav[0] . '">Remove</a></td>';
                    echo '</tr>';
                }
              ?>
          </tbody>
          <tfoot class="full-width">
              <th colspan="3">
                <a class="ui left floated small primary labeled icon button" href="remove-favorites.php">
                  <i class="remove circle icon"></i> Remove All Favorites
                </a>
              </th>
          </tfoot>
         </table>
    </section>

</main>

  <footer class="ui black inverted segment">
      <div class="ui container">footer</div>
  </footer>
</body>
</html>
