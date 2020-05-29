<?php
include('session.php');
 if (isset($_POST['insert']))
				 {
		 
			
				mysqli_query($db,"INSERT INTO `notification`(`notification_content`, `active`) VALUES ('".$_POST["content"]."',1)");
				$slquery = "SELECT * FROM notification  
ORDER BY id DESC  
LIMIT 1";
    $selectresult = mysqli_query($db,$slquery);
    if(mysqli_num_rows($selectresult)>0){
        $rows = mysqli_fetch_assoc($selectresult);
        $id_student = $rows["id"];
    }
				if($_POST["com_id"] == 0){
					$q = mysqli_query($db,"SELECT  * FROM student where active=1");  
									   if (mysqli_num_rows($q) > 0) {
										   while($row = mysqli_fetch_assoc($q)) {
										   		$temp = mysqli_query($db, "INSERT INTO `".$row["id"]."` (`notification_id`,`read`, `click`, `active`)
    VALUES ('$id_student','0','0','1')");
										   }
										}
				}else{
					$q = mysqli_query($db,"SELECT  * FROM student where category = '".$_POST["com_id"]."' and active=1");  
									   if (mysqli_num_rows($q) > 0) {
										   while($row = mysqli_fetch_assoc($q)) {
										   		$temp = mysqli_query($db, "INSERT INTO `".$row["id"]."` (`notification_id`,`read`, `click`, `active`)
    VALUES ('$id_student',0,0,1)");
										   }
										}
				}
			
				 }
		header("location: dashboard.php");
			exit;
			
			?>
	