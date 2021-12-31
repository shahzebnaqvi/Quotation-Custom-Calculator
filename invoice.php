
<?php include_once('connection.php'); ?>



<?php
$solar = $_REQUEST['solar'];

$inverter = $_REQUEST['inverter'];
$inverterkw = $_REQUEST['inverterkw'];

$panels = $_REQUEST['panels'];
$panelskw = $_REQUEST['panelskw'];

$structure = $_REQUEST['structure'];
$structurekw = $_REQUEST['structurekw'];


$row_inverter = mysqli_fetch_assoc(mysqli_query(connect_db(),'SELECT `price` FROM `solar_details` WHERE `solar_type` = "'.$solar.'" and `equipment` = "Inverter" and `quality` = "'.$inverter.'" and `kilowatt` = "'.$inverterkw.'"'))['price'];

$row_panels = mysqli_fetch_assoc(mysqli_query(connect_db(),'SELECT `price` FROM `solar_details` WHERE `solar_type` = "'.$solar.'" and `equipment` = "Panels" and `quality` = "'.$panels.'" and `kilowatt` = "'.$panelskw.'"'))['price'];


$row_structure = mysqli_fetch_assoc(mysqli_query(connect_db(),'SELECT `price` FROM `solar_details` WHERE `solar_type` = "'.$solar.'" and `equipment` = "Structure" and `quality` = "'.$structure.'" and `kilowatt` = "'.$structurekw.'"'))['price'];

$row_labor = mysqli_fetch_assoc(mysqli_query(connect_db(),'SELECT `price` FROM `solar_details` WHERE `solar_type` = "'.$solar.'" and `equipment` = "Labour" and `quality` = "Basic" and `kilowatt` = "'.$structurekw.'"'))['price'];

$row_miscellaneous = mysqli_fetch_assoc(mysqli_query(connect_db(),'SELECT `price` FROM `solar_details` WHERE `solar_type` = "'.$solar.'" and `equipment` = "Miscellaneous Components" and `quality` = "Basic" and `kilowatt` = "'.$structurekw.'"'))['price'];

$row_transport = mysqli_fetch_assoc(mysqli_query(connect_db(),'SELECT `price` FROM `solar_details` WHERE `solar_type` = "'.$solar.'" and `equipment` = "Transport/ Loading/Unloading" and `quality` = "Basic" and `kilowatt` = "'.$structurekw.'"'))['price'];

$row_earthing = mysqli_fetch_assoc(mysqli_query(connect_db(),'SELECT `price` FROM `solar_details` WHERE `solar_type` = "'.$solar.'" and `equipment` = "Earthing Pit" and `quality` = "Basic" and `kilowatt` = "'.$structurekw.'"'))['price'];


// echo "Solar : ".$solar;
// echo "<br>";

// echo "Inverter ".$inverter." ".$inverterkw." Price : ".$row_inverter;
// echo "<br>";

// echo "Panels Price : ".$row_panels;
// echo "<br>";

// echo "Structure Price : ".$row_structure;
// echo "<br>";

// echo "Labour Price : ".$row_labor;
// echo "<br>";

// echo "Miscellaneous Components Price : ".$row_miscellaneous;
// echo "<br>";

// echo "Transport/ Loading/Unloading Price : ".$row_transport;
// echo "<br>";

// echo "Earthing Pit : ".$row_earthing;
// echo "<br>";


$total = $row_inverter + $row_panels + $row_structure + $row_labor + $row_miscellaneous + $row_transport + $row_earthing;
// echo "Total Amount : ".$total;
// echo "<br>";



?>
<!DOCTYPE html>
<!-- saved from url=(0051)http://demo.harnishdesign.net/html/koice/index.html -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="http://demo.harnishdesign.net/html/koice/images/favicon.png" rel="icon">
  <title>Dummy Text</title>
  <meta name="author" content="harnishdesign.net">

<!-- Web Fonts
  ======================= -->
  <link rel="stylesheet" href="./General Invoice/css" type="text/css">

<!-- Stylesheet
  ======================= -->
  <link rel="stylesheet" type="text/css" href="./General Invoice/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="./General Invoice/all.min.css">
  <link rel="stylesheet" type="text/css" href="./General Invoice/stylesheet.css">
</head>
<body>
  <!-- Container -->
  <div class="container-fluid invoice-container">
    <!-- Header -->
    <header>
      <div class="row align-items-center">
        <div class="col-sm-7 text-center text-sm-start mb-3 mb-sm-0">
          <img id="logo" src="./General Invoice/dummy-logo.png" title="Koice" width="200" alt="Koice">
        </div>
        <div class="col-sm-5 text-center text-sm-end">
          <h4 class="text-7 mb-0">Quotes</h4>
        </div>
      </div>
      <hr>
    </header>

    <!-- Main Content -->
    <main>
      <div class="row">
        <div class="col-sm-6"><strong>Date:</strong> <?php echo date('d-F-Y');  ?></div>
        <div class="col-sm-6 text-sm-end"> <strong> Quotes No:</strong> <?php echo $_REQUEST['token']; ?></div>

      </div>
      <hr>
      <div class="row">
        <div class="col-sm-6 text-sm-end order-sm-1"> <strong>Pay To:</strong>
          <address>
            Dummy Text<br>
            Dummy Text
            <br>
            Dummy Text
            <br>Dummy@gmail.com      </address>
          </div>
          <div class="col-sm-6 order-sm-0"> <strong>Quotes To:</strong>
            <address>
              <?php echo $_REQUEST['name'] ?><br>
              <?php echo $_REQUEST['email'] ?><br>
              <?php echo $_REQUEST['phone'] ?><br>

            </address>
          </div>
        </div>

        <div class="card">
          <div class="card-body p-0">
            <div class="table-responsive">
              <table class="table mb-0">
                <thead class="card-header">
                  <tr>
                    <td class="col-3"><strong>Service</strong></td>
                    <td class="col-4"><strong>Description</strong></td>
                    <td class="col-2 text-center"><strong>Rate</strong></td>
                    <td class="col-1 text-center"><strong>KW</strong></td>
                    <td class="col-2 text-end"><strong>Amount</strong></td>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="col-3">Invertor</td>
                    <td class="col-4 text-1"><?php echo $_REQUEST['inverter']; ?></td>
                    <td class="col-2 text-center">Rs.<?php echo $row_inverter; ?></td>
                    <td class="col-1 text-center"><?php echo $_REQUEST['inverterkw']; ?></td>
                    <td class="col-2 text-end">Rs.<?php echo $row_inverter; ?></td>
                  </tr>
                  <tr>
                    <td class="col-3">Panels</td>
                    <td class="col-4 text-1"><?php echo $_REQUEST['panels']; ?></td>
                    <td class="col-2 text-center">Rs.<?php echo $row_panels; ?></td>
                    <td class="col-1 text-center"><?php echo $_REQUEST['panelskw']; ?></td>
                    <td class="col-2 text-end">Rs.<?php echo $row_panels; ?></td>
                  </tr>
                  <tr>
                    <td class="col-3">Structure</td>
                    <td class="col-4 text-1"><?php echo $_REQUEST['structure']; ?></td>
                    <td class="col-2 text-center">Rs.<?php echo $row_structure; ?></td>
                    <td class="col-1 text-center"><?php echo $_REQUEST['structurekw']; ?></td>
                    <td class="col-2 text-end">Rs.<?php echo $row_structure; ?></td>
                  </tr>
                  <tr>
                    <td class="col-3">Labour</td>
                    <td class="col-4 text-1">Basic</td>
                    <td class="col-2 text-center">Rs.<?php echo $row_labor; ?></td>
                    <td class="col-1 text-center"><?php echo $_REQUEST['structurekw']; ?></td>
                    <td class="col-2 text-end">Rs.<?php echo $row_labor; ?></td>
                  </tr>
                  <tr>
                    <td class="col-3">Miscellaneous Components</td>
                    <td class="col-4 text-1">Basic</td>
                    <td class="col-2 text-center">Rs.<?php echo $row_miscellaneous; ?></td>
                    <td class="col-1 text-center"><?php echo $_REQUEST['structurekw']; ?></td>
                    <td class="col-2 text-end">Rs.<?php echo $row_miscellaneous; ?></td>
                  </tr>
                  <tr>
                    <td class="col-3">Transport/ Loading/Unloading</td>
                    <td class="col-4 text-1">Basic</td>
                    <td class="col-2 text-center">Rs.<?php echo $row_transport; ?></td>
                    <td class="col-1 text-center"><?php echo $_REQUEST['structurekw']; ?></td>
                    <td class="col-2 text-end">Rs.<?php echo $row_transport; ?></td>
                  </tr>
                  <tr>
                    <td class="col-3">Earthing Pit</td>
                    <td class="col-4 text-1">Basic</td>
                    <td class="col-2 text-center">Rs.<?php echo $row_earthing; ?></td>
                    <td class="col-1 text-center"><?php echo $_REQUEST['structurekw']; ?></td>
                    <td class="col-2 text-end">Rs.<?php echo $row_earthing; ?></td>
                  </tr>
                </tbody>
                <tfoot class="card-footer">
                 <tr>
                  <td colspan="4" class="text-end"><strong>Sub Total:</strong></td>
                  <td class="text-end">Rs.<?php echo $total; ?></td>
                </tr>
                <tr>
                  <td colspan="4" class="text-end"><strong>Profit(15%):</strong></td>
                  <td class="text-end">Rs.<?php echo $total*0.15; ?></td>
                </tr>
                <tr>
                  <td colspan="4" class="text-end border-bottom-0"><strong>Total:</strong></td>
                  <td class="text-end border-bottom-0">Rs.<?php echo $total+$total*0.15; ?></td>
                </tr>
              </tfoot>
            </table>
          </div>
        </div>
      </div>
    </main>
    <!-- Footer -->
    <footer class="text-center mt-4">
      <p class="text-1"><strong>NOTE :</strong> This is computer generated receipt and does not require physical signature.<b>All prices are subject to change without prior  notice </b></p>
      <div class="btn-group btn-group-sm d-print-none"> <a href="javascript:window.print()" class="btn btn-light border text-black-50 shadow-none"><i class="fa fa-print"></i> Print</a> 
       <!--  <a href="http://demo.harnishdesign.net/html/koice/index.html" class="btn btn-light border text-black-50 shadow-none"><i class="fa fa-download"></i> Download</a> -->
         </div>
    </footer>
  </div>

</body></html>