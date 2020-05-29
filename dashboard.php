<?php

include_once('include/header.php');

if (isset($_SESSION['type1'])){
?>  
<div class="row wrapper border-bottom white-bg page-heading" style="margin-bottom: 10 px;">
   <div class="col-lg-10">
      <h2>Notification Push</h2>
   </div>
</div>
<form method="POST" action="notification-db.php">
         <div class="modal-body">

             <div class="form-group row">
               <label class="col-sm-3 col-form-label" >Notification Content</label>
               <input type="hidden" name="id" class="form-control m-b" value="<?php echo $row["tool_id"] ?>" required >
               <div class="col-sm-9"><input type="text" name="content" class="form-control m-b" value="<?php echo $row["tool_name"] ?>" required >
               </div>
            </div>
            
             <div class="form-group row">
               <label class="col-sm-3 col-form-label"  >Content Delivery</label>
               <div class="col-sm-9">
                  <select  class="chosen-select form-control" name="com_id" >
                     <option value="pick"  required>Select Department</option>
                     <option value='0'>All</option>
                     <?php
                        $q = mysqli_query($db,"SELECT * from category where active=1");
                        $row = mysqli_num_rows($q);
                        while ($row = mysqli_fetch_array($q)){
                        echo "<option value='".$row['id']."'>" .$row['category_name'] ."</option>";
                        }
                        ?>
                  </select>
               </div>
            </div>

           
            <div class="modal-footer">
               <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
               <button class="btn btn-primary btn-sm" type="submit" name="insert">Push</button>
            </div>
            
         </div>
      
      </form>
   </div>
<?php
}

include_once('include/footer.php');
?>

<script>
        $(document).ready(function() {

            $('.footable').footable();

        
        });

    </script> 


<script>
        $(document).ready(function() {
            setTimeout(function() {
                toastr.options = {
                    closeButton: true,
                    progressBar: true,
                    showMethod: 'slideDown',
                    timeOut: 4000
                };
                toastr.success('Online Portal', 'Welcome to Examly Website');

            }, 1300);
			 });
    </script>
