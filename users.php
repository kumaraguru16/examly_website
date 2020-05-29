<?php
   include('include/header.php');
   if (isset($_SESSION['type1'])){
   if (isset($_POST['username']) && isset($_POST['password'])){
    $username = $_POST['username'];
    $email = $_POST['useremail'];
    $password = $_POST['password'];
    $cpassword = $_POST['confirmpassword'];
    $slquery = "SELECT * FROM user WHERE email = '$email'";
    $selectresult = mysqli_query($db,$slquery);
    if(mysqli_num_rows($selectresult)>0)
    {
         $msg = 'email already exists';
    }
    elseif($password != $cpassword){
         $msg = "passwords doesn't match";
    }
    else{
          $query = "INSERT INTO user (username, email, password, active, session_in) 
  			  VALUES('$username', '$email', MD5('".$password."'), 1, 1)";;
          $result = mysqli_query($db,$query);
          if($result){
             $msg = "User Created Successfully.";
          }
    }
   }

     
?>

<!-- FooTable -->
<link href="css/plugins/footable/footable.core.css" rel="stylesheet">
<link href="css/plugins/datapicker/datepicker3.css" rel="stylesheet">


<div class="row wrapper border-bottom white-bg page-heading" style="margin-bottom: 10 px;">
   <div class="col-lg-10">
      <h2>Users</h2>
      <ol class="breadcrumb">
         <li class="breadcrumb-item">
            <a href="index.html">Home</a>
         </li>
         
         <li class="breadcrumb-item active">
            <strong>Users - List</strong>
         </li>
      </ol>
   </div>
</div>
<div class="wrapper wrapper-content animated fadeIn">


			<?php
					if(isset($msg)){
					?>
				


       <div class="alert alert-success alert-dismissable">
	   <?php echo $msg ?>
			<a  class="close button" href="users.php" >×</a>
			
		</div>
          
		<?php  }
				?>
				
				
<div class="row">
  
	  <div class="col-lg-12">
      <div class="ibox ">
         <div class="ibox-title">
            <h5>Users List</h5>
            <div class="ibox-tools">
               <a class="btn btn-primary pull-right" data-toggle="modal" data-target="#myModal">
               <i class="fa fa-plus-circle" aria-hidden="true"></i> Add User
         
               </a>  
            </div>
         </div>
         <div class="ibox-content">
            <input type="text" class="form-control form-control-sm m-b-xs" id="filter"
               placeholder="Search in table">
            <table class="footable table table-stripped" data-page-size="10" data-filter=#filter >
               <thead>
                  <tr>
                    
                     <th>User Name</th>
                     
                     <th>Email / Login ID</th>
                  </tr>
               </thead>
               <tbody>
                               
      <?php
	   
            $q = mysqli_query($db,"SELECT  * FROM user where active=1");
          
   if (mysqli_num_rows($q) > 0) {
       // output data of each row
	  $i=1;
       while($row = mysqli_fetch_assoc($q)) {
		   $u_id = $row['id'];
         ?>
                <tr>
              
               
                     
                     <td ><input type="hidden" value="<?php echo $u_id  ?>" ><?php echo $row["username"]  ?></td>
                     <td><?php echo $row["email"];   ?></td>
                  </tr>
				  
				   <?php
    $i++; }}
    else {
       echo "0 results";
   }
            
            ?>
             
                                </tbody>
               <tfoot>
                  <tr>
                     <td colspan="4">
                        <ul class="pagination float-right"></ul>
                     </td>
                  </tr>
               </tfoot>
            </table>
         </div>
      </div>
	  </div>
	  
	  
	  
	  
	  
	  
	  
	  
   </div>
</div>
<div class="modal inmodal" id="myModal" tabindex="-1" role="dialog"  aria-hidden="true">
   <div class="modal-dialog">
      <div class="modal-content animated fadeIn">
         <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
            <h4 class="modal-title">Create User</h4>
         </div>
         <form method="POST" action="">
		 
         <div class="modal-body">
             <div class="form-group row">
               <label class="col-sm-3 col-form-label" >User Name</label>
               <div class="col-sm-9"><input type="text" id="username" name="username" class="form-control m-b"  required >
               </div>
            </div>

            <div class="form-group row">
               <label class="col-sm-3 col-form-label" >Email ID</label>
               <div class="col-sm-9"><input type="email" id="useremail" name="useremail" class="form-control m-b"  required >
               </div>
            </div>
			
			 <div class="form-group row">
               <label class="col-sm-3 col-form-label" >Password</label>
               <div class="col-sm-9"><input type="text" id="password" name="password" class="form-control m-b"  required >
               </div>
            </div>
			
			<div class="form-group row">
               <label class="col-sm-3 col-form-label" >Confirm Password</label>
               <div class="col-sm-9"><input type="text" id="confirmpassword" name="confirmpassword" class="form-control m-b"  required >
               </div>
            </div>
             
             
            <div class="modal-footer">
               <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
               <button class="btn btn-primary btn-sm" type="submit" name="save_user">Save</button>
            </div>
         </div>
		 </form>
      </div>
   </div>
   <!--end-modal-content-->
</div>
<!--end-modal-dialog-->



<?php
}
   include_once('include/footer.php');
   ?>
<script src="js/plugins/datapicker/bootstrap-datepicker.js"></script>
<script>
   $(document).ready(function() {
   
   
   $('#data_1 .input-group.date').datepicker({
            format: "dd/mm/yyyy",
   todayBtn: "linked",
   autoclose: true,
   todayHighlight: true
       });
   
       $('.footable').footable();
   
   });
   
</script>

<script>
	$(document).ready(function(){
			
			

           $('.chosen-select').chosen({width: "100%"});
		   
		     });
	</script> 
  