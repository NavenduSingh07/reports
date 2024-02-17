<?php
include 'conn_rep.php';


$id = $_GET['emp_emailid'];

$data =  '
          <table border="1" class="table">
            <thead>
              <tr>
                <th scope="col">S. NO</th>
                <th scope="col">Description</th>
                <th scope="col">Date</th>
                <th scope="col">Time</th>
              </tr>
            </thead>
            <tbody>
            ';
?>
              <?php
              $id = $_GET['emp_emailid'];
              if (isset($_GET['from_date']) && isset($_GET['to_date'])) {
                $from_date = $_GET['from_date'];
                $to_date = $_GET['to_date'];
                $sql = "SELECT * FROM `reports` WHERE `emp_emailid`='" . $id . "' AND `date` BETWEEN '$from_date' AND '$to_date' ";
                $result = mysqli_query($conn, $sql);
                $sno = 0;
                if (mysqli_num_rows($result) > 0) {
                  foreach ($result as $row) {
                    $sno = ++$sno;
                    $desc = $row['descr'];
                    $pdate = $row['date'];
                    $ptime = $row['time'];

                    $data .= '<tr>
          <th scope="row">' . $sno . '</th>
          <td>' . $desc . '</td>
          <td>' . $pdate . '</td>
          <td>' . $ptime . '</td>
          </tr>';
                  }
                }
              }

              $name = "ReportOf_$id";
              header("Content-Type: application/xls");
              header("Content-Disposition: attachment; filename=$name.xls");

              echo $data;
              ?>