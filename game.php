<?php
  if (isset($_GET['number_of_pairs'])) {
    $cards = array();

    for($i = 1; $i <= $_GET['number_of_pairs']; $i++) {
      array_push($cards, $i, $i);
    }

    shuffle($cards);
  } else {
    http_response_code(500);
    exit;
  }
?>


<!doctype html>
<html>
<?php include('views/head.php'); ?>

  <body>
    <div id="board">
      <?php
        for($i = 0; $i < count($cards); $i++) {
          echo "<div class='card' data-value='" . $cards[$i] . "'>";
          echo "<img src='assets/img/cards/" . $cards[$i] . ".png' class='card--front'>";
          echo "<img src='assets/img/cards/back.png' class='card--back'>";
          echo "</div>";
        }
      ?>
    </div>
  </body>
</html>
