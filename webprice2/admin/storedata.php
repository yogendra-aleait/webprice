<!DOCTYPE html>
<html>
<head>
	<title></title>

	
	
	
</head>
<body>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

<link rel="stylesheet" type="text/css" href="formstyle.css">  
<?php
require __DIR__ . DIRECTORY_SEPARATOR . "lib" . DIRECTORY_SEPARATOR . "config.php";

$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$question = trim($_POST['question']);
$selectquery = "SELECT * FROM questions";
$result = mysqli_query($conn, $selectquery);
$rowcount=mysqli_num_rows($result);
if (!empty($_POST)){
		  if($question){
		 	$qid =$rowcount+1;
			 foreach (array_combine($_POST['option'], $_POST['price']) as $value1 => $value2){
		 if(!empty($value1) && !empty($value2)) {
		$value1=mysqli_real_escape_string($conn,$value1);
		$value2=mysqli_real_escape_string($conn,$value2);
			$sqlopt = "INSERT INTO options(opt_name,opt_price,qid) VALUES ('$value1','$value2','$qid')";
		    $dataQues = mysqli_query($conn, $sqlopt);
		    
		}
		}
			 
		$sql = "INSERT INTO questions (qid,question) VALUES (".$qid.",'".$_POST['question']."')";
			
		$dataQues = mysqli_query($conn, $sql);
		
		$lid = mysqli_insert_id($conn);
		
		echo '<script>
    swal({
    title: "Success",
    text: "Questions has been added",
	icon: "success"
    
}).then(function() {
    window.location = "questions_data.php";
});
</script>';	}
				
				else{

				echo '<script>
					swal({
					title: "Error",
					text: "Empty Questions can not be added",
					icon: "error"
					
				}).then(function() {
					window.location = "questions.php";
				});
				</script>';

	}
	
}	





?>