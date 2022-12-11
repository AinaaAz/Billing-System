<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
  <title>Line Chart - 2021 & 2022 </title>
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
          createHeader('book', 'Line Chart', '2021 & 2022');
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
 
	$query_1 = "SELECT SUM(amount) AS value_sum FROM bill WHERE month = 'jan21' ";
    $result_1 = mysqli_query($con, $query_1);
	$row_1 = mysqli_fetch_assoc($result_1);
    $sum_1 = $row_1['value_sum'];
	
	$query_2 = "SELECT SUM(amount) AS value_sum FROM bill WHERE month = 'feb21' ";
    $result_2 = mysqli_query($con, $query_2);
	$row_2 = mysqli_fetch_assoc($result_2);
    $sum_2 = $row_2['value_sum'];
	
	$query_3 = "SELECT SUM(amount) AS value_sum FROM bill WHERE month = 'mac21' ";
    $result_3 = mysqli_query($con, $query_3);
	$row_3 = mysqli_fetch_assoc($result_3);
    $sum_3 = $row_3['value_sum'];
	
	$query_4 = "SELECT SUM(amount) AS value_sum FROM bill WHERE month = 'apr21' ";
    $result_4 = mysqli_query($con, $query_4);
	$row_4= mysqli_fetch_assoc($result_4);
    $sum_4 = $row_4['value_sum'];
	
	$query_5 = "SELECT SUM(amount) AS value_sum FROM bill WHERE month = 'may21' ";
    $result_5 = mysqli_query($con, $query_5);
	$row_5 = mysqli_fetch_assoc($result_5);
    $sum_5 = $row_5['value_sum'];
	
	$query_6 = "SELECT SUM(amount) AS value_sum FROM bill WHERE month = 'jun21' ";
    $result_6 = mysqli_query($con, $query_6);
	$row_6 = mysqli_fetch_assoc($result_6);
    $sum_6 = $row_6['value_sum'];
	
	$query_7 = "SELECT SUM(amount) AS value_sum FROM bill WHERE month = 'jul21' ";
    $result_7 = mysqli_query($con, $query_7);
	$row_7 = mysqli_fetch_assoc($result_7);
    $sum_7 = $row_7['value_sum'];
	
	$query_8 = "SELECT SUM(amount) AS value_sum FROM bill WHERE month = 'aug21' ";
    $result_8 = mysqli_query($con, $query_8);
	$row_8= mysqli_fetch_assoc($result_8);
    $sum_8 = $row_8['value_sum'];
	
	$query_9 = "SELECT SUM(amount) AS value_sum FROM bill WHERE month = 'sep21' ";
    $result_9 = mysqli_query($con, $query_9);
	$row_9 = mysqli_fetch_assoc($result_9);
    $sum_9 = $row_9['value_sum'];
	
	$query_10 = "SELECT SUM(amount) AS value_sum FROM bill WHERE month = 'oct21' ";
    $result_10 = mysqli_query($con, $query_10);
	$row_10 = mysqli_fetch_assoc($result_10);
    $sum_10 = $row_10['value_sum'];
	
	$query_11 = "SELECT SUM(amount) AS value_sum FROM bill WHERE month = 'nov21' ";
    $result_11 = mysqli_query($con, $query_11);
	$row_11 = mysqli_fetch_assoc($result_11);
    $sum_11 = $row_11['value_sum'];
	
	$query_12 = "SELECT SUM(amount) AS value_sum FROM bill WHERE month = 'dec21' ";
    $result_12 = mysqli_query($con, $query_12);
	$row_12= mysqli_fetch_assoc($result_12);
    $sum_12 = $row_12['value_sum'];
	
	$query_13 = "SELECT SUM(amount) AS value_sum FROM bill WHERE month = 'jan22' ";
    $result_13 = mysqli_query($con, $query_13);
	$row_13 = mysqli_fetch_assoc($result_13);
    $sum_13 = $row_13['value_sum'];
	
	$query_14 = "SELECT SUM(amount) AS value_sum FROM bill WHERE month = 'feb22' ";
    $result_14 = mysqli_query($con, $query_14);
	$row_14 = mysqli_fetch_assoc($result_14);
    $sum_14 = $row_14['value_sum'];
	
	$query_15 = "SELECT SUM(amount) AS value_sum FROM bill WHERE month = 'mac22' ";
    $result_15 = mysqli_query($con, $query_15);
	$row_15 = mysqli_fetch_assoc($result_15);
    $sum_15 = $row_15['value_sum'];
	
	$query_16 = "SELECT SUM(amount) AS value_sum FROM bill WHERE month = 'apr22' ";
    $result_16 = mysqli_query($con, $query_16);
	$row_16= mysqli_fetch_assoc($result_16);
    $sum_16 = $row_16['value_sum'];
	
	$query_17 = "SELECT SUM(amount) AS value_sum FROM bill WHERE month = 'may22' ";
    $result_17 = mysqli_query($con, $query_17);
	$row_17 = mysqli_fetch_assoc($result_17);
    $sum_17 = $row_17['value_sum'];
	
	$query_18 = "SELECT SUM(amount) AS value_sum FROM bill WHERE month = 'jun22' ";
    $result_18 = mysqli_query($con, $query_18);
	$row_18 = mysqli_fetch_assoc($result_18);
    $sum_18 = $row_18['value_sum'];
	
	$query_19 = "SELECT SUM(amount) AS value_sum FROM bill WHERE month = 'jul22' ";
    $result_19 = mysqli_query($con, $query_19);
	$row_19 = mysqli_fetch_assoc($result_19);
    $sum_19 = $row_19['value_sum'];
	
	$query_20 = "SELECT SUM(amount) AS value_sum FROM bill WHERE month = 'aug22' ";
    $result_20 = mysqli_query($con, $query_20);
	$row_20= mysqli_fetch_assoc($result_20);
    $sum_20 = $row_20['value_sum'];
	
	$query_21 = "SELECT SUM(amount) AS value_sum FROM bill WHERE month = 'sep22' ";
    $result_21 = mysqli_query($con, $query_21);
	$row_21 = mysqli_fetch_assoc($result_21);
    $sum_21 = $row_21['value_sum'];
	
	$query_22 = "SELECT SUM(amount) AS value_sum FROM bill WHERE month = 'oct22' ";
    $result_22 = mysqli_query($con, $query_22);
	$row_22 = mysqli_fetch_assoc($result_22);
    $sum_22 = $row_22['value_sum'];
	
	$query_23 = "SELECT SUM(amount) AS value_sum FROM bill WHERE month = 'nov22' ";
    $result_23 = mysqli_query($con, $query_23);
	$row_23 = mysqli_fetch_assoc($result_23);
    $sum_23 = $row_23['value_sum'];
	
	$query_24 = "SELECT SUM(amount) AS value_sum FROM bill WHERE month = 'dec22' ";
    $result_24 = mysqli_query($con, $query_24);
	$row_24= mysqli_fetch_assoc($result_24);
    $sum_24 = $row_24['value_sum'];
	
    $dataPoints3 = array(
	array("y" => $sum_1, "label" => "Jan 21"),
	array("y" => $sum_2, "label" => "Feb 21"),
	array("y" => $sum_3, "label" => "Mac 21"),
	array("y" => $sum_4, "label" => "Apr 21"),
	array("y" => $sum_5, "label" => "May 21"),
	array("y" => $sum_6, "label" => "Jun 21"),
	array("y" => $sum_7, "label" => "Jul 21"),
	array("y" => $sum_8, "label" => "Aug 21"),
	array("y" => $sum_9, "label" => "Sep 21"),
	array("y" => $sum_10, "label" => "Oct 21"),
	array("y" => $sum_11, "label" => "Nov 21"),
	array("y" => $sum_12, "label" => "Dec 21"),
	array("y" => $sum_13, "label" => "Jan 22"),
	array("y" => $sum_14, "label" => "Feb 22"),
	array("y" => $sum_15, "label" => "Mac 22"),
	array("y" => $sum_16, "label" => "Apr 22"),
	array("y" => $sum_17, "label" => "May 22"),
	array("y" => $sum_18, "label" => "Jun 22"),
	array("y" => $sum_19, "label" => "Jul 22"),
	array("y" => $sum_20, "label" => "Aug 22"),
	array("y" => $sum_21, "label" => "Sep 22"),
	array("y" => $sum_22, "label" => "Oct 22"),
	array("y" => $sum_23, "label" => "Nov 22"),
	array("y" => $sum_24, "label" => "Dec 22"),
    );
?>

<script type="text/javascript">

    $(function () {
        var chart1 = new CanvasJS.Chart("chartContainer1",{
        theme: "light3",
        animationEnabled: true,
        title: {
            text: "Monthly Electrical Consumption (2021 & 2022)"
        },
        axisY: {
            title: "Total Amount (RM)"
        },
        data: [{
            type: "line",
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
