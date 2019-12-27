<style>
body {font-family: Arial, Helvetica, sans-serif;}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: auto; /* Location of the box */
  padding-bottom: auto;
  left: 0;
  top: 0;
  width: auto; /* Full width */
  height: auto; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
  background-color: #fefefe;
  margin: auto;
  padding: 20px;
  border: 1px solid #888;
  width: 70%;
  height: auto;
}

/* The Close Button */
.close {
  color: #aaaaaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}
</style>
<style type="text/css">
	form{
		display: none;
	}
</style>
<?php 
include ('questionnaire.php');?><center>
<div class="container"><div class="row"><div id="demo1" class="collapse">
<?php
$total=0;
for ($j = 1; $j <=$rowcount ; $j++) {
$total+=$_POST['option'.$j];
$sql = " SELECT * FROM questions where qid=$j";
$question = mysqli_query($conn, $sql);
$rows = array();
$row = mysqli_fetch_array($question,MYSQLI_ASSOC);
echo "Question $j : {$row['question']}  <br> "  ;
$que = $row['question'];
$qid = $row['qid'];

$optprice = $_POST['option'.$j];
$sql1 = " SELECT opt_name,opt_price FROM options Where opt_price =$optprice AND qid=$j";

$opt = mysqli_query($conn, $sql1);
$rows = array();
while($row = mysqli_fetch_array($opt,MYSQLI_ASSOC)){
echo "&nbsp;&nbsp;<b>Your choice&nbsp;</b>".$row['opt_name'];
echo   "&nbsp;&nbsp;<b>Price&nbsp;</b>". $_POST['option'.$j];
$sql2 = "INSERT INTO contact_choice (q_id,question,choice,opt_price) VALUES ('$qid','$que','".$row['opt_name']."','".$_POST['option'.$j]."')";

$contact  = mysqli_query($conn, $sql2);
}
?> <br><?php
	}
?></div></div></div><div class="container">
	<div class="row">
    <div class="col-sm"><button  onclick="window.location.href = 'index.php';">Go Back</button> 
<h3>Your custom website estimate : </h3></div><div class="col-sm"><?php echo $total; 
?></div>
<br><button  data-toggle="collapse" data-target="#demo1">Show Breakdown</button><button id="myBtn">Show Contact Form</button>	
<div id="demo2" class="collapse"></div></div></div>
</center>
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    <?php include ('contact-us.php'); ?>
  </div></div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script>

window.location.hash="no-back-button";
window.location.hash="Again-No-back-button";
window.onhashchange=function(){window.location.hash="no-back-button";}
</script> 
<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>

