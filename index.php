<!doctype html>
<html>
<?php include('views/head.php'); ?>

  <body>
  <div class="container">
    <h1>Welcome to MEMORYJS!</h1>
    <div class="row">
        <div class="col-xs-6 col-md-6 col-lg-6">


            <form action="game.php" method="get">
                <div class="form-group">
                    <label for="number_of_pairs">Number of pairs</label>

                    <input type="text" name="number_of_pairs" class="form-control">

                    <small class="form-text text-muted">Select a value between 2 to 9 included.</small>
                </div>
                <button type="submit" class="btn btn-primary">Play</button>
            </form>


        </div>
    </div>
</div>
  </body>
</html>
