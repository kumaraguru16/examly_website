<?php

include_once('include/header_student.php');
if (isset($_SESSION['type2'])){
?>  
<div class="row wrapper border-bottom white-bg page-heading" style="margin-bottom: 10 px;">
   <div class="col-lg-10">
      <h2>Hi,     This is the coding playground for you to improve the coding skills </h2>
   </div>

  
</div>


   </div>
<?php
}
include_once('include/footer_student.php');
?>

<script>
        $(document).ready(function() {

            $('.footable').footable();

        
        });

    </script> 

<script>
$(document).ready(function(){
 
 function load_unseen_notification(view = '')
 {
    var list = '<?php echo $userid_student; ?>';
  $.ajax({
   
   url:"load_data_in_notification.php",
   method:"POST",
   data:{view:view,userid:list},
   dataType:"json",
   success:function(data)
   {
    console.log(data.notification);
    $('.dropdown-menu').html(data.notification);
    if(data.unseen_notification > 0)
    {
     $('.count').html(data.unseen_notification);
    }
   }
  });
 }
 
 load_unseen_notification();
 
 $(document).on('click', '.dropdown-toggle', function(){
  $('.count').html('');
  load_unseen_notification('yes');
 });
 
 setInterval(function(){ 
  load_unseen_notification();; 
 }, 5000);
 
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
