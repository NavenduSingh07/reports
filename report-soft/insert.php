<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

</head>

<body>

  <?php
  session_start();
  include_once 'conn_rep.php';
  if (isset($_POST['submit'])) {
    if (empty($_POST['descr'])) {
      echo '<div class="jumbotron alert-danger">
    <h1 class="display-4 ">Record not updated!</h1>
    <p class="lead">Record cannot be updated because description box was Empty !</p>
    <a class="btn btn-primary btn-lg" href="report.php?from_date=' . date('Y/m/d') . '&to_date=' . date('Y/m/d') . '" role="button">Go Back</a>
  </div>';
    } else {
      $emp_emailid = $_SESSION['emp_emailid'];
      $descr = $_POST['descr'];
      $sql = "INSERT INTO `reports` (`descr`, `emp_emailid`, `date`, `time`) VALUES ('" . $descr . "', '" . $emp_emailid . "', current_timestamp(), current_timestamp())";
      if (mysqli_query($conn, $sql)) {
        echo '<div class="jumbotron alert-success">
  <h1 class="display-4 ">Congratulations!</h1>
  <p class="lead">New record has been added successfully !</p>
  <a class="btn btn-primary btn-lg" href="report.php?from_date=' . date('Y/m/d') . '&to_date=' . date('Y/m/d') . '" role="button">Go Back</a>
</div>';
      } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
      }
    }
    mysqli_close($conn);
  }
  ?>

  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>

</body>

</html>