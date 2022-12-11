<?php
	$conn = new mysqli("localhost", "root", "", "electrical_consumption");
 
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}

	$month=$_POST['month'];
	$current=$_POST['current_reading'];
    $previous=$_POST['previous_reading'];
	
    $first=0.218;
	$second=0.334;
	$third=0.516;
	
	$kWhUsed = $current-$previous;


    if ($previous>=$current){
		$kWhUsed=0;
		$amount=0;
	}
	else if($kWhUsed<=200) {
		$amount=round($kWhUsed*$first,2);
	}
	else if ($kWhUsed >200 && $kWhUsed<=300) {
		$first200kWh=200*$first;
		$remainingkWh=($kWhUsed-200)*$second;
		$amount=round($first200kWh+$remainingkWh,2);
	}
	else if ($kWhUsed>300) {
		$first200kWh=200*$first;
		$second100kWh=100*$second;
		$remainingkWh=($kWhUsed-300)*$third;
		$amount=round($first200kWh+$second100kWh+$remainingkWh,2);
	}

    $sql="insert into bill (month, current_reading, previous_reading, amount) values ('$month', '$current', '$previous', $amount)";
	
    $conn->query($sql);

	header('location:add_bill.php');
?>