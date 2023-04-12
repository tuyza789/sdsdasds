<meta charset="utf-8">
<?php
	@session_start();
	include("connectdb.php");

	
	
		foreach($_SESSION['ida'] as $pid) {
			$sum[$pid] = $_SESSION['pricea'][$pid] * $_SESSION['itema'][$pid] ;
			@$total += $sum[$pid] ;
		}

	$sql = "INSERT INTO `order` (`o_id`, `o_total`, `o_date`, `o_member`) VALUES ('', '$total', CURRENT_TIMESTAMP, '".$_SESSION['ses_id']."');" ;
	
	mysqli_query($conn, $sql) or die(mysqli_error($conn)) ;
	$id = mysqli_insert_id($conn);
	
	foreach($_SESSION['ida'] as $pid) {
		
		$sql2 = "INSERT INTO `order_detail` (`od_id`, `o_id`, `pid`, `item`) VALUES ('NULL', '$id', '".$_SESSION['ida'][$pid]."', '".$_SESSION['itema'][$pid]."');" ;
		mysqli_query($conn, $sql2)or die(mysqli_error($conn)) ;
	}

	
	
echo "<meta http-equiv=\"refresh\" content=\"0;URL=clearall.php\">";
?>


