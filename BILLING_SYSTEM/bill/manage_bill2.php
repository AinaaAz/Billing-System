<?php
  require "php/db_connection.php";

  if($con) {
    if(isset($_GET["action"]) && $_GET["action"] == "delete") {
      $id = $_GET["id"];
      $query = "DELETE FROM bill WHERE ID = $id";
      $result = mysqli_query($con, $query);
      if(!empty($result))
    		showBILL(0);
    }

    if(isset($_GET["action"]) && $_GET["action"] == "edit") {
      $id = $_GET["id"];
      showBILL($id);
    }

    if(isset($_GET["action"]) && $_GET["action"] == "update") {
      $id = $_GET["id"];
      $month = ucwords($_GET["month"]);
      $current_reading = $_GET["current_reading"];
      $previous_reading = ucwords($_GET["previous_reading"]);
      $amount = ucwords($_GET["amount"]);
      updateBILL($id, $month, $curent_reading, $previous_reading, $amount);
    }

    if(isset($_GET["action"]) && $_GET["action"] == "cancel")
      showBILL(0);

    if(isset($_GET["action"]) && $_GET["action"] == "search")
      searchBILL(strtoupper($_GET["text"]));
  }

  function showBILL($id) {
    require "php/db_connection.php";
    if($con) {
      $seq_no = 0;
      $query = "SELECT * FROM bill";
      $result = mysqli_query($con, $query);
      while($row = mysqli_fetch_array($result)) {
        $seq_no++;
        if($row['id'] == $id)
          showEditOptionsRow($seq_no, $row);
        else
          showBILLRow($seq_no, $row);
      }
    }
  }

  function showBILLRow($seq_no, $row) {
    ?>
    <tr>
      <td><?php echo $seq_no; ?></td>
      <td><?php echo $row['id'] ?></td>
      <td><?php echo $row['month']; ?></td>
      <td><?php echo $row['current_reading']; ?></td>
      <td><?php echo $row['previous_reading']; ?></td>
      <td><?php echo $row['amount']; ?></td>
      <td>
 
        <button class="btn btn-danger btn-sm" onclick="deleteBILL(<?php echo $row['id']; ?>);">
          <i class="fa fa-trash"></i>
        </button>
      </td>
    </tr>
       <?php
	
  }

function showEditOptionsRow($seq_no, $row) {
  ?>
  <tr>
    <td><?php echo $seq_no; ?></td>
    <td><?php echo $row['id'] ?></td>
    <td><input type="text" class="form-control" value="<?php echo $row['month']; ?>" placeholder="Month" id="month");"></td>
    <td><input type="number" class="form-control" value="<?php echo $row['current_reading']; ?>" placeholder="Current Reading" id="current_reading");"></td>
	<td><input type="number" class="form-control" value="<?php echo $row['previous_reading']; ?>" placeholder="Previous Reading" id="previous_reading");"></td>
    <td><input type="number" class="form-control" value="<?php echo $row['amount']; ?>" placeholder="Amount" id="amount");"></td>
    <td>
      <button href="" class="btn btn-success btn-sm" onclick="updateBILL(<?php echo $row['id']; ?>);">
        <i class="fa fa-edit"></i>
      </button>
      <button class="btn btn-danger btn-sm" onclick="cancel();">
        <i class="fa fa-close"></i>
      </button>
    </td>
  </tr>
  <?php
}

function updateBILL($id, $month, $current_reading, $previous_reading, $amount) {
  require "db_connection.php";
  $query = "UPDATE bill SET month = '$month', current_reading = '$current_reading', previous_reading = '$previous_reading', amount = '$amount', WHERE ID = $id";
  $result = mysqli_query($con, $query);
  if(!empty($result))
    showBILL(0);
}

?>
