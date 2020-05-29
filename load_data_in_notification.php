<?php


 include("config.php");
 
  $id = $_POST['userid'];
 $query = "SELECT * FROM `$id` JOIN `notification` WHERE `notification`.`id` = `$id`.`notification_id` ORDER BY `$id`.`id` desc limit 5";
 $result = mysqli_query($db, $query);
 $output = '';
 if($_POST["view"] != '')
 {
  $update_query = "UPDATE `$id` SET `read` = 1 ";
  mysqli_query($db, $update_query);
 }
 if(mysqli_num_rows($result) > 0)
 {
  while($row = mysqli_fetch_array($result))
  {
   $output .= '
   <li>
    <a href="#">
     <strong>'.$row["notification_content"].'</strong><br />
     
    </a>
   </li>
   <li class="divider"></li>
   ';
  }
 }
 else
 {
  $output .= '<li><a href="#" class="text-bold text-italic">No Notification Found</a></li>';
 }

 $query_1 = "SELECT * FROM `$id` WHERE `read` = 0";
 $result_1 = mysqli_query($db, $query_1);
 $count = mysqli_num_rows($result_1);
 $data = array(
  'notification'   => $output,
  'unseen_notification' => $count
 );
 echo json_encode($data);

?>