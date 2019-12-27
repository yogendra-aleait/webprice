 <?php include ('admin/store.php');?>

 <form id="regForm" method="POST" action=finish.php><b>Your Estimate Price: &nbsp;</b><b id="price"></b>
 <?php
 $selectquery = "SELECT * FROM questions";
 $result = mysqli_query($conn, $selectquery);
$rowcount=mysqli_num_rows($result);
 for ($c = 1; $c <=$rowcount ; $c++) {
$sql = " SELECT id,question FROM questions where qid=$c";
$question = mysqli_query($conn, $sql);
$sql1 = " SELECT opt_name,opt_price FROM options where qid=$c";
$opt = mysqli_query($conn, $sql1);
$rows = array();
$row = mysqli_fetch_array($question,MYSQLI_ASSOC);
?>
<fieldset><div class="tab" id="dev_<?php echo $c; ?>">
<h3><?php  
echo "Question $c : {$row['question']}  <br> "  ; ?></h3>
<?php

$rows = array();
while($row = mysqli_fetch_array($opt,MYSQLI_ASSOC)){
?> <div class="radio">
<label class="btn well" style="position:relative;"> 
    <input required type='radio' id='option' name='option<?php echo $c;?>' class="radio" value="<?php echo $row['opt_price'];?>"><?php echo $row['opt_name'];?> </label></div>
<?php }?><div  class="btn-holder">
  <div style="float:right;">
     <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
    <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
  </div>
</div>
</div></fieldset>
<?php } ?>

<div style="text-align:center;margin-top:40px;">
 <?php
for($i=0;$i<=$rowcount;$i++){

  echo '<span class="step"></span>';
}


 ?> 

</div></form>

<script src="script.js"></script>


</body>
</html>
