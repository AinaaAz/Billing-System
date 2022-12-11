<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
  <title>Bar Chart - 2022 </title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
		<script src="bootstrap/js/jquery.min.js"></script>
		<script src="bootstrap/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="shortcut icon" href="images/icon.svg" type="image/x-icon">
    <link rel="stylesheet" href="css/sidenav.css">
    <link rel="stylesheet" href="css/home.css">
    <script src="js/restrict.js"></script>
  </head>
  <body>

<?php include "sections/sidenav.html"; ?>
<div class="container-fluid">
      <div class="container">
        <!-- header section -->
        <?php
          require "php/header.php";
          createHeader('bar-chart', 'Bar Chart', '2022');
        ?>

<!--script src="/assets/js/	"></script-->
		<script src="/assets/js/jquery-1.12.4.min.js"></script>
		<script src="/assets/js/bootstrap.min.js"></script>
		<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
<div class="row">
<div id="content" class="col-md-8 col-md-offset-1 col-xs-12">


<div id="chartContainer1" style="width: 100%; height: 500px;display: inline-block;"></div>
<br /><br />


<?php
	require "php/db_connection.php";
 
	$query_1 = "SELECT SUM(amount) AS value_sum FROM bill WHERE month = 'jan22' ";
    $result_1 = mysqli_query($con, $query_1);
	$row_1 = mysqli_fetch_assoc($result_1);
    $sum_1 = $row_1['value_sum'];
	
	$query_2 = "SELECT SUM(amount) AS value_sum FROM bill WHERE month = 'feb22' ";
    $result_2 = mysqli_query($con, $query_2);
	$row_2 = mysqli_fetch_assoc($result_2);
    $sum_2 = $row_2['value_sum'];
	
	$query_3 = "SELECT SUM(amount) AS value_sum FROM bill WHERE month = 'mac22' ";
    $result_3 = mysqli_query($con, $query_3);
	$row_3 = mysqli_fetch_assoc($result_3);
    $sum_3 = $row_3['value_sum'];
	
	$query_4 = "SELECT SUM(amount) AS value_sum FROM bill WHERE month = 'apr22' ";
    $result_4 = mysqli_query($con, $query_4);
	$row_4= mysqli_fetch_assoc($result_4);
    $sum_4 = $row_4['value_sum'];
	
	$query_5 = "SELECT SUM(amount) AS value_sum FROM bill WHERE month = 'may22' ";
    $result_5 = mysqli_query($con, $query_5);
	$row_5 = mysqli_fetch_assoc($result_5);
    $sum_5 = $row_5['value_sum'];
	
	$query_6 = "SELECT SUM(amount) AS value_sum FROM bill WHERE month = 'jun22' ";
    $result_6 = mysqli_query($con, $query_6);
	$row_6 = mysqli_fetch_assoc($result_6);
    $sum_6 = $row_6['value_sum'];
	
	$query_7 = "SELECT SUM(amount) AS value_sum FROM bill WHERE month = 'jul22' ";
    $result_7 = mysqli_query($con, $query_7);
	$row_7 = mysqli_fetch_assoc($result_7);
    $sum_7 = $row_7['value_sum'];
	
	$query_8 = "SELECT SUM(amount) AS value_sum FROM bill WHERE month = 'aug22' ";
    $result_8 = mysqli_query($con, $query_8);
	$row_8= mysqli_fetch_assoc($result_8);
    $sum_8 = $row_8['value_sum'];
	
	$query_9 = "SELECT SUM(amount) AS value_sum FROM bill WHERE month = 'sep22' ";
    $result_9 = mysqli_query($con, $query_9);
	$row_9 = mysqli_fetch_assoc($result_9);
    $sum_9 = $row_9['value_sum'];
	
	$query_10 = "SELECT SUM(amount) AS value_sum FROM bill WHERE month = 'oct22' ";
    $result_10 = mysqli_query($con, $query_10);
	$row_10 = mysqli_fetch_assoc($result_10);
    $sum_10 = $row_10['value_sum'];
	
	$query_11 = "SELECT SUM(amount) AS value_sum FROM bill WHERE month = 'nov22' ";
    $result_11 = mysqli_query($con, $query_11);
	$row_11 = mysqli_fetch_assoc($result_11);
    $sum_11 = $row_11['value_sum'];
	
	$query_12 = "SELECT SUM(amount) AS value_sum FROM bill WHERE month = 'dec22' ";
    $result_12 = mysqli_query($con, $query_12);
	$row_12= mysqli_fetch_assoc($result_12);
    $sum_12 = $row_12['value_sum'];
	
    $dataPoints3 = array(
	array("y" => $sum_1, "label" => "Jan"),
	array("y" => $sum_2, "label" => "Feb"),
	array("y" => $sum_3, "label" => "Mac"),
	array("y" => $sum_4, "label" => "Apr"),
	array("y" => $sum_5, "label" => "May"),
	array("y" => $sum_6, "label" => "Jun"),
	array("y" => $sum_7, "label" => "Jul"),
	array("y" => $sum_8, "label" => "Aug"),
	array("y" => $sum_9, "label" => "Sep"),
	array("y" => $sum_10, "label" => "Oct"),
	array("y" => $sum_11, "label" => "Nov"),
	array("y" => $sum_12, "label" => "Dec"),
    );
?>

<script type="text/javascript">

    $(function () {
        var chart1 = new CanvasJS.Chart("chartContainer1",{
        theme: "light3",
        animationEnabled: true,
        title: {
            text: "Monthly Electrical Consumption (2022)"
        },
        axisY: {
            title: "Total Amount (RM)"
        },
        data: [{
            type: "bar",
            showInLegend: true,
            legendMarkerColor: "white",
            legendText: "Month",
            dataPoints: <?php echo json_encode($dataPoints3, JSON_NUMERIC_CHECK); ?>
        }]
    });

    chart1.render();

    });
</script>
                </div>
            </div>
        </div>
    </div>
  </body>
</html>
