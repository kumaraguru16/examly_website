<?php
  
   include_once('include/header_student.php');
   
   if (isset($_SESSION['type2'])){
   ?>
<link href="css/plugins/datapicker/datepicker3.css" rel="stylesheet">
<div class="row wrapper border-bottom white-bg page-heading" style="margin-bottom: 10 px;">
   <div class="col-lg-10">
      <h2>Personal Details</h2>
      <ol class="breadcrumb">
         <li class="breadcrumb-item">
            <a href="index.html">Home</a>
         </li>
         
         <li class="breadcrumb-item active">
            <strong>Personal Details</strong>
         </li>
      </ol>
   </div>
</div>
<?php 
   $query = "SELECT * FROM `student` JOIN `category` WHERE `student`.`id` = '$userid_student' and `student`.`category` = `category`.`id`";
 $result = mysqli_query($db, $query);
  if(mysqli_num_rows($result) > 0)
 {
  while($row = mysqli_fetch_array($result))
  {

?>
 <div class="modal-body">
        
        <div class="form-group row"><label class="col-sm-3 col-form-label">Student Name</label>

            <div class="col-sm-9">
                <div class="input-group"><input type="text" name="itemname" class="form-control"
                        value="<?php echo $row["username"] ?>" required disabled /> </div>
            </div>
        </div>


        <div class="form-group row"><label class="col-sm-3 col-form-label">Email</label>

            <div class="col-sm-9">
                <div class="input-group"><input type="text" name="draw_number" class="form-control"
                        value="<?php echo $row["email"] ?>" required disabled /> </div>
            </div>
        </div>





        <div class="form-group row "><label class="col-sm-3 col-form-label">Category</label>

            <div class="col-sm-9">
                <div class="input-group"><input type="text" name="assembly_code" class="form-control num"
                        value="<?php echo $row["category_name"] ?>" readonly /> </div>
            </div>
        </div>




        <div class="form-group row"><label class="col-sm-3 col-form-label">College Name</label>

            <div class="col-sm-9">
                <div class="input-group"><input type="text" name="assembly_darwing" class="form-control draw"
                        value="<?php echo $row["college"] ?>" readonly /> </div>
            </div>
        </div>


        <div class="form-group row"><label class="col-sm-3 col-form-label">City</label>
            <div class="col-sm-9">
                <input type="text" name="quantity" class="form-control"
                    value="<?php echo $row["city"] ?>" required />
            </div>
        </div>


    </div>  
      <?php
   }}
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