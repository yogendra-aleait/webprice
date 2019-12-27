<html>
  <head>  
           <title>Website Price Calculater</title>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script> 
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
            <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script> 
      </head>
<?php
// INIT
session_start();
require __DIR__ . DIRECTORY_SEPARATOR . "lib" . DIRECTORY_SEPARATOR . "config.php";

// HTML
require PATH_LIB . "page-top.php"; ?>
<div class="row">
  <div class="col-sm-6">
  <form name="usrform" method="POST" action="storedata.php">
  	
  		<button type="button" name="add" id="add" >Add More</button>

  		<button type="submit" >Submit</button><br>
  <label>Enter Question</label>
  <textarea rows="4" cols="50" name="question">
  </textarea>
  <div id="dynamic_field">

      <div class="col-sm-6" ><label>option</label><input type="text" name="option[]"></div><div class="col-sm-6"><label>Price</label><input type="text" name="price[]"></div>
  	
    </div>
  </form>
</div>
</div>
<?php require PATH_LIB . "page-bottom.php"; ?>

<script>  
 $(document).ready(function(){  
      var i=1; 
      var j=2; 
      $('#add').click(function(){  
      	if(j<=30){
           i++;  
           $('#dynamic_field').append('<div id=row'+j+'><div class="col-sm-6" ><label>option</label><input type="text" name="option[]"></div><div class="col-sm-4"><label>Price</label><input type="text" name="price[]"></div><div class="col-sm-2"><button id='+j+' class="btn_remove">Remove</button></div></div>');  j++;
           }
           else
            swal({
    title: "Error",
    text: "Sorry!! No More Options.",
  icon: "error"
    
});
          return false
      });  
      $("#dynamic_field").on('click', '.btn_remove', function(){  
           var button_id = $(this).attr("id");   
           $('#row'+button_id+'').remove();  
      });  
      /*$('#submit').click(function(){            
           $.ajax({  
                url:"store.php",  
                method:"POST",  
                data:$('#add').serialize(),  
                success:function(data)  
                {  
                     alert(+j+);  
                     $('#add')[0].reset();  
                }  
           });  
      });*/  
 });  
 </script>
</html>